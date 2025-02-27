

# Portfolio-PHP

## Requisitos
- PHP 8.1.2 instalado no sistema.

## Passos para executar o projeto
1. Abra um terminal.

2. Clone este repositório em sua máquina local.
  
3. Navegue até o diretório do projeto:
   ```sh
   cd portfolio-php
   ```
4. Execute o seguinte comando para iniciar o servidor embutido do PHP:
   ```sh
   php -S localhost:8888 -t public
   ```
5. Acesse o projeto no navegador através do endereço:
   ```
   http://localhost:8888
   ```
## Passos para executar aplicação via container Docker

1. Abra um terminal.

2. Clone este repositório em sua máquina local.
  
3. Navegue até o diretório do projeto:
   ```sh
   cd portfolio-php
   ```
4. Execute o seguinte para construcação da imagem do container:
   ```sh
   docker build -t app-portfolio:v1 .
   ```
5. Execute o comandado abaxido para execução do container:
   ```sh
   docker run -d -p 8888:80 --name app-portfolio app-portfolio:v1
   ```
6. Acesse o projeto no navegador através do endereço:
   ```
   http://localhost:8888
   ```