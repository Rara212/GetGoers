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
        $events = $this->eventModel->findAll();

        $payload = [
            "events" => $events
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
        echo view('event/new');
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create()
    {
        $fileName = "";

        $photo = $this->request->getFile('photo');

        if ($photo) {
            $fileName = $photo->getRandomName(); // Mendapatkan nama file baru secara acak

            $photo->move('photos', $fileName); // Memindahkan file ke public/photos dengan nama acak
        }

        $payload = [
            'name' => $this->request->getPost('name'),
            'location' => $this->request->getPost('location'),
            'about' => $this->request->getPost('about'),
            'Time' => $this->request->getPost('Time'),
            'category'    => $this->request->getPost('category'),
            'price'    => (int) $this->request->getPost('price'),
            'quota'    => (int) $this->request->getPost('quota'),
            'photo' => $fileName,
        ];

        $this->eventModel->insert($payload);
        return redirect()->to('/event');
    }

    /**
     * Return the editable properties of a resource object
     *
     * @return mixed
     */
    public function edit($id = null)
    {
        $event = $this->eventModel->find($id);
        
        if (!$event) {
            throw new \Exception("Data not found!");   
        }
        
        echo view('event/edit', ["data" => $event]);
    }

    /**
     * Add or update a model resource, from "posted" properties
     *
     * @return mixed
     */
    public function update($id = null)
    {
        $payload = [
            'name' => $this->request->getPost('name'),
            'location' => $this->request->getPost('location'),
            'about' => $this->request->getPost('about'),
            'Time' => $this->request->getPost('Time'),
            'category'    => $this->request->getPost('category'),
            'price'    => (int) $this->request->getPost('price'),
            'quota'    => (int) $this->request->getPost('quota'),
            'photo' => $fileName,
        ];

        $this->eventModel->update($id, $payload);
        return redirect()->to('/event');
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        $this->eventModel->delete($id);
        return redirect()->to('/event');
    }
}
