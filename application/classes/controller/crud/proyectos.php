<?

class Controller_Crud_Proyectos extends Controller_Crud
{    
    protected $_index_fields = array(
    'id',
    'titulo'
    );

    protected $_orm_model = 'proyecto';
}
