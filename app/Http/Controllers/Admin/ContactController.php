<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ContactRequest;
use App\Service\ContactService;

class ContactController extends Controller
{
    /**
     * Lista as caracteristicas dos imoveis
     *
     * @return void
     */
    public function list()
    {
        $params = ContactService::list();

        return view('admin.pages.contact-list')->with($params);
    }

    /**
     * Retorna os dados de uma unica mensagem
     *
     * @param int $id
     * @param int $page
     * @return void
     */
    public function view($id, $page)
    {
        $params = ContactService::view($id);

        return view('admin.pages.contact-view')->with(array_merge($params, ['page' => $page]));
    }

    /**
     * Atualiza os dados da mensagem
     *
     * @param ContactRequest $request
     * @return void
     */
    public function read(ContactRequest $request)
    {
        // sanitized and validated data
        $data = $request->validated();
        // seta que a mensagem foi lida ou nao
        ContactService::read($data['id'], $data['read']);
        // redireciona para a listagem
        return redirect()->route('contact-list', ['page' => $request['page']]);
    }
}
