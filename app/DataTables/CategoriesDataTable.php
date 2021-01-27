<?php

namespace App\DataTables;

use App\Models\Category;
use Illuminate\Database\Eloquent\Builder;
use Yajra\DataTables\DataTableAbstract;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class CategoriesDataTable extends DataTable
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
        ->editColumn('created_at', function ($category) {
          return formatDateTime($category->created_at);
        })
        ->editColumn('updated_at', function ($category) {
          return formatDateTime($category->updated_at);
        })
        ->addColumn('action', function ($category) {
          return view('partials.actions', [
              'model' => $category
          ]);
        });
  }

  /**
   * Get query source of dataTable.
   *
   * @param Category $model
   * @return Builder
   */
  public function query(Category $model)
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
        ->setTableId('categories-table')
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
        Column::make('description')->title('Descrição'),
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
    return 'Categories_' . date('YmdHis');
  }
}
