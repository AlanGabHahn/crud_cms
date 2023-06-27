CMS 
Primeiros Passos

Para baixar este repositório localmente, crie uma pasta no seu computador com o nome de sua preferência. Abra o terminal do seu computador dentro da pasta selecionada e rode o comando abaixo:

git clone https://github.com/AlanGabHahn/crud_cms.git
obs:lembrando que para fazer desta forma é necessário ter o git instalado na máquina

Depois de ter feito download do projeto, e necessário também rodar os comandos para baixar todas as dependências do projeto:

composer install
npm install
Também é necessário ter o composer, node e php instalados para funcionar corretamente

É necessário criar um arquivo no root da aplicação com o nome ".env" e dentro dele ter as mesmas variáveis do ".env.example", porém as mais importantes são as abaixo:

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nome_do_banco
DB_USERNAME=root
DB_PASSWORD=
Depois de ter as dependências instaladas, para que o programa rode corretamente, é preciso ter uma conexão com o banco de dados mySql rodando na porta padrão (3306), sendo assim, recomendo também o download do xampp.

Pronto! Tudo instalado corretamente
Agora será necessário ter dois terminais rodando, um deles será necessário rodar os comandos abaixo:

php artisan migrate
php artisan db:seed
php artisan serve
Estes comandos irão rodar as migrations e criar as tabelas no DB

E no outro terminal rodar o comando:

npm run dev
Tudo pronto!
Agora é só acessar o seu localhost na porta 8000.
Ao aparecer a tela de login, utilizar o usário criado no seeder para acessar a aplicação:
email: teste@teste.com
senha: 123456