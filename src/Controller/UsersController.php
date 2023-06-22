<?php
declare(strict_types=1);

namespace App\Controller;

class UsersController extends AppController
{
    public function initialize(): void
    {
        $this->viewBuilder()->setLayout('myLayout');
    }

    public function index()
    {
        $users = $this->paginate($this->Users);
        $this->set(compact('users'));
    }

    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => ['Produits'],
        ]);
        $this->set(compact('user'));
    }

    public function add()
    {
        $user = $this->Users->newEmptyEntity();

        if ($this->request->is('post')) {
            $data = $this->request->getData();

            $user = $this->Users->patchEntity($user, $data);

            if ($this->Users->save($user)) {
                // $this->Flash->success("Product create successfully");
                return $this->redirect(['controller' => 'Users', 'action' => 'index']);
            } else {
                $this->Flash->error("Failed to create user");
            }
        }

        $this->set(compact('user'));
    }

    public function edit($id = null)
    {
        if ($this->request->is(['patch', 'post', 'put'])) {

        }
        $this->set(compact('user'));
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        $this->Users->delete($user);
        return $this->redirect(['action' => 'index']);
    }

}

?>