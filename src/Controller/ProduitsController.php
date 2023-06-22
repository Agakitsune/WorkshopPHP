<?php

namespace App\Controller;

class ProduitsController extends AppController
{
    public function initialize(): void
    {
        $this->viewBuilder()->setLayout('myLayout');
    }

    public function index()
    {
        $this->loadComponent('Paginator');
        $produits = $this->Paginator->paginate($this->Produits->find());
        $this->set(compact('produits'));
    }

    public function add()
    {
        // $produitsTable = $this->getTableLocator()->get('Produits');
        $produit = $this->Produits->newEmptyEntity();

        if ($this->request->is('post')) {
            $data = $this->request->getData();

            $produit = $this->Produits->patchEntity($produit, $data);

            if ($this->Produits->save($produit)) {
                // $this->Flash->success("Product create successfully");
                return $this->redirect(['controller' => 'Produits', 'action' => 'index']);
            } else {
                $this->Flash->error("Failed to create product");
            }
        }
        $this->set(compact('produit'));
    }

}

?>