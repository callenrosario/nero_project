<?php
class DocumentsController extends AppController {
    public $helpers = array('Html', 'Form');

    public function index() {
        $this->set('documents', $this->Document->find('all'));
    }

    public function view($id = null) {
        if (!$id) {
            throw new NotFoundException(__('Invalid document'));
        }

        $document = $this->Document->findById($id);
        if (!$document) {
            throw new NotFoundException(__('Invalid document'));
        }
        $this->set('document', $document);
    }

    public function add() {
        if ($this->request->is('document')) {
            $this->Document->create();
            if ($this->Document->save($this->request->data)) {
                $this->Session->setFlash('Your document has been saved.');
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('Unable to add your document.');
            }
        }
    }
}
