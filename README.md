<h1>API de Libreria para code challenge</h1>
<p>***********El deploy del API se hizo con heroku, y se puede consultar a traves de la siguiente URL***********</p>
<h3>https://librarylaravelapi.herokuapp.com/</h3>

<p>Todas las rutas incian por defecto con la url mostrada arriba y posteriormente con el prefijo '/api' y seguido por la siguiente lista de prefijos:</p>
<ul>
    <li>/category</li>
    <ul>
        <li>Metodo de peticion: get</li>
        <li>Mustra todas las categorias en la base de datos</li>
    </ul>
    <li>/createCategory</li>
    <ul>
        <li>Metodo de peticion: post</li>
        <li>Agrega una nueva categoria</li>
        <li>Parametros requeridos: name, description</li>
    </ul>
    <li>/updateCategory/{id}</li>
    <ul>
        <li>Metodo de peticion: put</li>
        <li>Actualiza una categoria</li>
        <li>Parametros requeridos: id</li>
        <li>Parametros actualizables: name, description</li>
    </ul>
    <li>/destroyCategory/{id}</li>
    <ul>
        <li>Metodo de peticion: delete</li>
        <li>Elimina una categoria</li>
        <li>Parametros requeridos: id</li>
    </ul>
    <li>/book</li>
    <ul>
        <li>Metodo de peticion: get</li>
        <li>Mustra todos los libros en la base de datos</li>
    </ul>
    <li>/createBook</li>
    <ul>
        <li>Metodo de peticion: post</li>
        <li>Agrega un nuevo libro</li>
        <li>Parametros requeridos: name, author, category_id, published_date</li>
    </ul>
    <li>/updateBook/{id}</li>
    <ul>
        <li>Metodo de peticion: put</li>
        <li>Actualiza un libro</li>
        <li>Parametros requeridos: id</li>
        <li>Parametros actualizables: name, author, category_id, published_date</li>
    </ul>
    <li>/destroyBook/{id}</li>
    <ul>
        <li>Metodo de peticion: delete</li>
        <li>Elimina un libro</li>
        <li>Parametros requeridos: id</li>
    </ul>
    <li>/user</li>
    <ul>
        <li>Metodo de peticion: get</li>
        <li>Mustra todos los usuarios en la base de datos</li>
    </ul>
    <li>/createUser</li>
    <ul>
        <li>Metodo de peticion: post</li>
        <li>Agrega un nuevo usuario</li>
        <li>Parametros requeridos: name, email</li>
    </ul>
    <li>/updateUser/{id}</li>
    <ul>
        <li>Metodo de peticion: put</li>
        <li>Actualiza un usuario</li>
        <li>Parametros requeridos: id</li>
        <li>Parametros actualizables: name, email</li>
    </ul>
    <li>/destroyUser/{id}</li>
    <ul>
        <li>Metodo de peticion: delete</li>
        <li>Elimina un usuario</li>
        <li>Parametros requeridos: id</li>
    </ul>
    <li>/bookBorrowed</li>
    <ul>
        <li>Metodo de peticion: get</li>
        <li>Mustra todos los prestamos registrados en la base de datos</li>
    </ul>
    <li>/createBookBorrowed</li>
    <ul>
        <li>Metodo de peticion: post</li>
        <li>Agrega un nuevo prestamo y envia un correo a los usuarios anunciando que se presto un libro</li>
        <li>Parametros requeridos: book_id, user_id</li>
    </ul>
    <li>/updateBookBorrowed/{id}</li>
    <ul>
        <li>Metodo de peticion: put</li>
        <li>Actualiza un prestamo</li>
        <li>Parametros requeridos: id</li>
        <li>Parametros actualizables: book_id, user_id</li>
    </ul>
    <li>/destroyBookBorrowed/{id}</li>
    <ul>
        <li>Metodo de peticion: delete</li>
        <li>Elimina un pretamo de libro y envia un correo anunciando que se desocupo un libro</li>
        <li>Parametros requeridos: id</li>
    </ul>
</ul>
