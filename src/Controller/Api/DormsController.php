<?php
namespace App\Controller\Api;

use Cake\Event\Event;
use Cake\Network\Exception\UnauthorizedException;
use Cake\Utility\Security;
use Firebase\JWT\JWT;
use Cake\Datasource\ConnectionManager;

class DormsController extends AppController
{
	public function initialize()
    {
        parent::initialize();
        $this->Auth->allow(['nearby', 'getDorm']);
    }
    
    public function nearby($latitude = null, $longitude = null)
	{
		$connection = ConnectionManager::get('default');
		$results = $connection
    		->execute('SELECT id, dorm_name, dorm_type, (6367*acos(cos(radians(:latitude))
               *cos(radians(dorm_latitude))
               *cos(radians(dorm_longitude)
               -radians(:longitude))
               +sin(radians(:latitude))*sin(radians(dorm_latitude))))
               AS distance FROM dorms ORDER BY distance', ['latitude' => $latitude, 'longitude' => $longitude])
    		->fetchAll('assoc');

		$this->set([
    		'my_response' => $results,
    		'_serialize' => 'my_response',
		]);
		$this->RequestHandler->renderAs($this, 'json');
	}
	
	public function getDorm($id = null)
	{
		$dormBaseInfo = $this->Dorms->get($id);
		$dormReviews = [];
		$dormImages = [];

		$fullInfo = [
			'general_info' => $dormBaseInfo,
			'reviews' => $dormReviews,
			'images' => $dormImages
		];

		$this->set([
    		'my_response' => $fullInfo,
    		'_serialize' => 'my_response',
		]);
		$this->RequestHandler->renderAs($this, 'json');
	}
}