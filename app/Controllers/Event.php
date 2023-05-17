<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\EventModel;

class Event extends ResourceController
{
    public function __construct() {
        $this->eventModel = new EventModel();
    }

    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */

    public function index()
    {
        $events = $this->eventModel->paginate(4, 'events');


        $payload = [
            "events" => $events,
            "pager" => $this->eventModel->pager
        ];

        echo view('event/index', $payload);
    }

    /**
     * Return the properties of a resource object
     *
     * @return mixed
     */
    public function show($id = null)
    {
        $event = $this->eventModel->find($id);
        
        if (!$event) {
            throw new \Exception("Data not found!");   
        }
        
        
        echo view('event/show', ["data" => $event]);
    }

    /**
     * Return a new resource object, with default properties
     *
     * @return mixed
     */
    public function new()
    {
        echo view();
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create()
    {
        
    }

    /**
     * Return the editable properties of a resource object
     *
     * @return mixed
     */
    public function edit($id = null)
    {
        
    }

    /**
     * Add or update a model resource, from "posted" properties
     *
     * @return mixed
     */
    public function update($id = null)
    {
        
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        
    }
}
