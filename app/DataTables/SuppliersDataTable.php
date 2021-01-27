<?php

namespace App\DataTables;

use App\Models\Supplier;
use Illuminate\Database\Eloquent\Builder;
use Yajra\DataTables\DataTableAbstract;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class SuppliersDataTable extends DataTable
{
  /**
   * Build DataTable class.
   *
   * @param mixed $query Results from query() method.
   * @return DataTableAbstract
   */
  public function dataTable($query)
  {
    return datatables()
        ->eloquent($query)
        ->editColumn('created_at', function ($supplier) {
          return formatDateTime($supplier->created_at);
        })
        ->editColumn('updated_at', function ($supplier) {
          return formatDateTime($supplier->updated_at);
        })
        ->addColumn('action', function ($supplier) {
          return view('partials.actions', [
              'model' => $supplier
          ]);
        });
  }

  /**
   * Get query source of dataTable.
   *
   * @param Supplier $model
   * @return Builder
   */
  public function query(Supplier $model)
  {
    return $model->newQuery();
  }

  /**
   * Optional method if you want to use html builder.
   *
   * @return \Yajra\DataTables\Html\Builder
   */
  public function html()
  {
    return $this->builder()
        ->setTableId('suppliers-table')
        ->columns($this->getColumns())
        ->minifiedAjax()
        ->dom('Bfrtip')
        ->orderBy(1)
        ->parameters([
            'language' => ['url' => 'https://cdn.datatables.net/plug-ins/1.10.20/i18n/Portuguese-Brasil.json'],
        ]);
  }

  /**
   * Get columns.
   *
   * @return array
   */
  protected function getColumns()
  {
    return [
        Column::make('id')->title('#'),
        Column::make('name')->title('Nome'),
        Column::make('nickname')->title('Fantasia'),
        Column::make('email')->title('E-mail'),
        Column::make('code')->title('Cód'),
        Column::make('created_at')->title('Criado em'),
        Column::make('updated_at')->title('Atualizado em'),
        Column::computed('action')
            ->exportable(false)
            ->printable(false)
            ->width(60)
            ->addClass('text-center text-nowrap')
            ->title('Ações'),
    ];
  }

  /**
   * Get filename for export.
   *
   * @return string
   */
  protected function filename()
  {
    return 'Suppliers_' . date('YmdHis');
  }
}
