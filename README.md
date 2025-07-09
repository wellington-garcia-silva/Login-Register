# Login-Register

Projeto Fullstack usando PHP, HTML, CSS e Javascrip

Funcionamento:

Baixar todos os aquivos deste repositório

Baixo o Xammp para local server 

Na IDE de prefereência, colocar os arquivos em uma pasta e abrir este pasta

Inicializar o Xaamp em Apache e MySql

Ir até o endereço para cadastrar usuários: http://localhost/phpmyadmin/index.php?route=/sql&db=users_db&table=users&pos=0

No menu esquerdo, ir até users -> criar tabela nomeando-a e definindo com 4 colunas.

Definir 4 variáveis como sendo: 1° id (int) (PRIMARY), nome (varchar 40), email (varchar 50) (Unique), password (Varchar) -> Salvar

No navegador, meu projeto está em: http://localhost/login_register/ (abrir de acordo com o diretório que foram postos os arquivos). No meu caso está em uma chamada Login Register.

Clicar no botão login no canto superior direito 

Cadastre o usuário com nome, email e senha

Volte para a tela de login digitando email e senhas definidas. Usuário cadastrado com sucesso - deve aparecer uma mensagem informando isto. 

Na página de criação do PHP admin é possível visualizar o usuário cadastrado com suas informações informadas durante o ristro. Note que a senha está criptografada.
