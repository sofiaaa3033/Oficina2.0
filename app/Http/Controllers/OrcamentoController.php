<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateOrcamento;
use App\Models\Orcamento;
use Illuminate\Http\Request;

class OrcamentoController extends Controller
{
    /**
     * Exibe uma lista dos orçamentos.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $orcamentos = Orcamento::orderBy('id', 'DESC')->paginate();

        return view('admin.orcamento.index', compact('orcamentos'));
    }

    /**
     * Exibe o formulário para criar um novo orçamento.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.orcamento.create');
    }

    /**
     * Armazena um novo orçamento no banco de dados.
     *
     * @param  \App\Http\Requests\StoreUpdateOrcamento  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreUpdateOrcamento $request)
    {
        Orcamento::create($request->all());

        return redirect()
            ->route('orcamento.index')
            ->with('message', 'Orçamento criado com sucesso');
    }

    /**
     * Exibe os detalhes de um orçamento específico.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $orcamento = Orcamento::find($id);

        if (!$orcamento) {
            return redirect()->route('orcamento.index');
        }

        return view('admin.orcamento.show', compact('orcamento'));
    }

    /**
     * Remove um orçamento específico do banco de dados.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $orcamento = Orcamento::find($id);

        if (!$orcamento) {
            return redirect()->route('orcamento.index');
        }

        $orcamento->delete();

        return redirect()
            ->route('orcamento.index')
            ->with('message', 'Orçamento deletado com sucesso');
    }

    /**
     * Exibe o formulário para editar um orçamento específico.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $orcamento = Orcamento::find($id);

        if (!$orcamento) {
            return redirect()->back();
        }

        return view('admin.orcamento.edit', compact('orcamento'));
    }

    /**
     * Atualiza um orçamento específico no banco de dados.
     *
     * @param  \App\Http\Requests\StoreUpdateOrcamento  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(StoreUpdateOrcamento $request, $id)
    {
        $orcamento = Orcamento::find($id);

        if (!$orcamento) {
            return redirect()->back();
        }

        $orcamento->update($request->all());

        return redirect()
            ->route('orcamento.index')
            ->with('message', 'Orçamento atualizado com sucesso');
    }

    /**
     * Busca orçamentos com base nos critérios especificados.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\View\View
     */
    public function search(Request $request)
    {
        $filters = $request->except('_token');

        $query = Orcamento::query();

        if (!empty($request->search)) {
            $query->where(function($q) use ($request) {
                $q->where('cliente', 'LIKE', "%{$request->search}%")
                    ->orWhere('vendedor', 'LIKE', "%{$request->search}%");
            });
        }

        if (!empty($request->start_date) && !empty($request->end_date)) {
            $query->whereBetween('created_at', [$request->start_date, $request->end_date]);
        }

        if (!empty($request->cliente)) {
            $query->where('cliente', 'LIKE', "%{$request->cliente}%");
        }

        if (!empty($request->vendedor)) {
            $query->where('vendedor', 'LIKE', "%{$request->vendedor}%");
        }

        $orcamentos = $query->paginate();

        return view('admin.orcamento.index', compact('orcamentos', 'filters'));
    }
}
