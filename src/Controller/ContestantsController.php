<?php


namespace App\Controller;

use App\Controller\AppController;

class ContestantsController extends AppController
{
    public function initialize()
    {
        parent::initialize();

        $this->loadComponent('Paginator');
        $this->loadComponent('Flash'); // Include the FlashComponent
    }

    public function index()
    {
        $contestants = $this->Paginator->paginate($this->Contestants->find());
        $this->set(compact('contestants'));
    }

    public function view($slug)
    {
        $contestant = $this->Contestants->findBySlug($slug)->firstOrFail();
        $this->set(compact('contestant'));
    }

    public function add()
    {
        $contestant = $this->Contestants->newEntity();
        if ($this->request->is('post')) {
            $contestant = $this->Contestants->patchEntity($contestant, $this->request->getData());

            // Hardcoding the user_id is temporary, and will be removed later
            // when we build authentication out.
            $contestant->user_id = 1;

            if ($this->Contestants->save($contestant)) {
                $this->Flash->success(__('Your name has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Unable to add your article.'));
        }
        $this->set('contestant', $contestant);
    }
}