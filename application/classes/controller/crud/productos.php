<?

class Controller_Crud_Productos extends Controller_Crud
{    
    protected $_index_fields = array(
    'id',
    'titulo'
    );

    protected $_orm_model = 'producto';
}
