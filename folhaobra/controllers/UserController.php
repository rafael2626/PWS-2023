<?php
require_once 'models\User.php';
require_once 'controllers\Controller.php';

class UserController extends Controller
{
    public function index()
    {
        $this->authenticationFilterAllows(['admin','funcionario']);

        $users = User::all();
        $this->renderView('user', 'index', ['users' => $users]);
    }

    public function show($id)
    {
        $this->authenticationFilterAllows(['admin','funcionario']);

        $user = User::find($id);
        if (is_null($user)) {
            $this->renderView('user', 'show', ['users' => $user, 'id' => $id]);
        } else {
            $this->renderView('user', 'show', ['users' => $user]);
        }
    }

    public function create()
    {
        $this->authenticationFilterAllows(['admin','funcionario']);

        $this->renderView('user', 'create');
    }

    public function store()
    {
        $this->authenticationFilterAllows(['admin','funcionario']);

        $user = new User($this->getHTTPPost());
        if ($user->is_valid()) {
            $user->save();
            $this->redirectToRoute('user', 'index');
        } else {
            $this->renderView('user', 'create', ['user' => $user]);
        }
    }

    public function edit($id)
    {
        $this->authenticationFilterAllows(['admin','funcionario']);

        $user = User::find($id);
        if (is_null($user)) {
            $this->redirectToRoute('user', 'index');
        } else {
            $this->renderView('user', 'edit', ['user' => $user, 'id' => $id]);
        }
    }

    public function update($id)
    {

        $this->authenticationFilterAllows(['admin','funcionario']);

        $user = User::find($id);
        $user->update_attributes($this->getHTTPPost());
        if ($user->is_valid()) {
            $user->save();
            $this->redirectToRoute('user', 'index');
        } else {
            $this->renderView('user', 'edit', ['user' => $user]);
        }
    }

    public function delete($id)
    {
        $this->authenticationFilterAllows(['admin','funcionario']);

        $user = User::find($id);
        $user->delete();
        $this->redirectToRoute('user', 'index');
    }
}