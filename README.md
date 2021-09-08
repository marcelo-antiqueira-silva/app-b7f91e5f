# Teste Técnico - Appmax - API
## 1. Requisitos 

- PHP >= 7.2.5
- Laravel 7.0
- Mysql 8.0

<br /> 
<hr />

## 2. Utilizando o projeto  

- Clonar o projeto em: https://github.com/marcelo-antiqueira-silva/app-b7f91e5f.git;
- Crie um database em MYSQL com o nome;
- Após finalizar o clone do projeto, abra o terminal de sua preferência e acesse a pasta do projeto e digite: "composer update";
- Em seguida, edite o arquivo .env com as seguintes sentenças: 
    
    ```
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=appmax
    DB_USERNAME=seu usuário
    DB_PASSWORD=sua senha
    ```
- Abra o terminal de sua preferência e acesse a pasta do projeto e digite: "php artisan:serve";
- Acesse o projeto através do seguinte endereço: http://127.0.0.1:8000/api/{chamada};
- Para acessar as chamadas disponíveis, consulte o tópico 'Chamadas da API';

<br /> 
<hr />

## 3. Chamadas da API

<table style="border: 1px solid #ccc">
    <thead style="border: 1px solid #ccc">
        <tr style="text-align: center">
            <td>Chamada</td>    
            <td>Descrição</td>    
            <td>Método</td>    
            <td>URL</td>    
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>produtos</td>    
            <td>Cadastro de produtos</td>    
            <td>POST</td>    
            <td>http://127.0.0.1:8000/api/produtos</td>    
        </tr>
    </tbody>
</table>

<br />  

- Exemplo para realizar as chamadas: 

    * Cadastro de Produtos - POST:

        ```
        {   
            "nome": "teste",
            "sku": "teste123",
            "quantidade_inicial": 1
        }
        ```


<hr />  

### Contato 

- Em caso de dúvidas, entre em contato no seguinte email: marcelo.antiqueira@gmail.com 