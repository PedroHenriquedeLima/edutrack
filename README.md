# EduTrack

## Descrição
EduTrack é um sistema de rastreamento de alunos, aulas e pagamentos, projetado para fornecer controle total aos professores na palma de suas mãos. Este sistema permite que os professores gerenciem facilmente seus alunos, agendem aulas e acompanhem os pagamentos, tudo em um só lugar.

## Recursos Principais
- **Gerenciamento de Alunos:** Adicione, edite e exclua informações dos alunos.
- **Agendamento de Aulas:** Defina horários e dias para as aulas dos alunos.
- **Rastreamento de Pagamentos:** Acompanhe os pagamentos dos alunos e receba notificações de vencimento.

## Tecnologias Utilizadas
- **Laravel:** Framework PHP para o backend.
- **Bootstrap:** Biblioteca de CSS para o frontend.
- **MySQL:** Banco de dados relacional para armazenamento de dados.
- **JavaScript:** Para interatividade do usuário no frontend.

## Instalação
1. Clone este repositório: `git clone https://github.com/seu-usuario/edutrack.git`
2. Instale as dependências do Composer: `composer install`
3. Copie o arquivo `.env.example` para `.env` e configure seu ambiente, incluindo as credenciais do banco de dados.
4. Gere a chave de aplicativo Laravel: `php artisan key:generate`
5. Execute as migrações do banco de dados: `php artisan migrate`
6. Inicie o servidor de desenvolvimento: `php artisan serve`
7. Acesse o sistema no navegador: `http://localhost:8000`

## Contribuindo
Estamos abertos a contribuições para melhorar o EduTrack. Sinta-se à vontade para enviar pull requests ou relatar problemas encontrados.

## Licença
Este projeto é licenciado sob a Licença MIT - consulte o arquivo [LICENSE](LICENSE) para obter detalhes.
