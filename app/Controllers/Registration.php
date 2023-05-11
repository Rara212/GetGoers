<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\EventModel;
use App\Models\TicketingModel;

class Registration extends ResourceController
{
    public function __construct() {
        $this->eventModel = new EventModel();
        $this->ticketingModel = new TicketingModel();
    }

    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    public function index($id = null)
    {
        $event = $this->eventModel->find($id);

        if (!$event) {
            throw new \Exception("Data not found!");   
        }
        
        echo view('registration/index', ["data" => $event]);
    }

    /**
     * Return the properties of a resource object
     *
     * @return mixed
     */
    public function show($id = null)
    {
        //
    }

    /**
     * Return a new resource object, with default properties
     *
     * @return mixed
     */
    public function new()
    {
        echo view('registration/new');
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create()
    {
        $payload = [
            "email" => $this->request->getPost('email'),
            "event" => $this->request->getPost('eventName'),
            "firstname" => $this->request->getPost('firstName'),
            "lastname" => $this->request->getPost('lastName'),
            "country_code" => $this->request->getPost('countryCode'),
            "telephone" => $this->request->getPost('telephone'),
            "gender" => $this->request->getPost('gender'),
            "tickets_issued" => (int) $this->request->getPost('ticketsIssued'),
        ];

        $this->ticketingModel->insert($payload);
        return redirect()->to('/event');
    }

    /**
     * Return the editable properties of a resource object
     *
     * @return mixed
     */
    public function edit($id = null)
    {
        //
    }

    /**
     * Add or update a model resource, from "posted" properties
     *
     * @return mixed
     */
    public function update($id = null)
    {
        //
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        //
    }
}
