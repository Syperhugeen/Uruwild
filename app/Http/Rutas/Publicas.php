<?php 









//Ruta de Home
Route::get('/' , [                    
  'uses' => 'Publicas\Home_Public_Controller@get_home',
  'as'   => 'get_home']
);


//Contacto
Route::get('/Contacto' , [                    
  'uses' => 'Publicas\Paginas_Controller@get_pagina_contacto',
  'as'   => 'get_pagina_contacto']
);

//Empresa
Route::get('/Empresa' , [                    
  'uses' => 'Publicas\Paginas_Controller@get_pagina_empresa',
  'as'   => 'get_pagina_empresa']
);

//Servicios
Route::get('/Servicios' , [                    
  'uses' => 'Publicas\Paginas_Controller@get_pagina_servicios',
  'as'   => 'get_pagina_servicios']
);


require __DIR__ . '/Formularios/Rutas_Formularios_Publicas.php';


