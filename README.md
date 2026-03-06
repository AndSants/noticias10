# Notícias10

O Noticias10 é uma aplicação web simples para gerenciamento e consulta de notícias organizadas por categorias.

A plataforma resolve o problema de organização e busca eficiente de conteúdos, permitindo que usuários cadastrem notícias, classifiquem por categorias e realizem buscas rápidas por título ou categoria.

## 🚀 Começando

Essas instruções permitirão que você obtenha uma cópia do projeto em operação na sua máquina local para fins de desenvolvimento e teste.
Esta aplicação em desenvolvimento utiliza Laravel Sail que é compatível com macOS, Linux e Windows (via WSL2).

### 📋 Pré-requisitos

Antes de começar, verifique se você tem os seguintes pré-requisitos instalados:

- [Docker](https://www.docker.com/get-started) (versão 23.00 ou superior)
- [WSL2](https://learn.microsoft.com/en-us/windows/wsl/about) (para Windows)

### 🔧 Instalação

1. **Clone o repositório**:     

```
git clone git@github.com:AndSants/noticias10.git
```

2. **Dependência do projeto**: 

Instale as dependências do aplicativo navegando até o diretório do aplicativo e executando o seguinte comando. 
Este comando usa um pequeno contêiner Docker contendo PHP e Composer para instalar as dependências do aplicativo:

```
docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v "$(pwd):/var/www/html" \
    -w /var/www/html \
    laravelsail/php85-composer:latest \
    composer install --ignore-platform-reqs
```
3. **Configurando o .env**

Existe um arquivo de exemplo chamado '.env-exemple', você pode criar uma cópia dele para .env na raiz do projeto e configure as variáveis de ambiente

4. **Build do projeto**:  

Finalmente, você pode iniciar o Sail.

```
./vendor/bin/sail up -d
./vendor/bin/sail npm install
./vendor/bin/sail npm run dev
```
> [!IMPORTANT]\
> Caso esteja utilizando `CACHE_STORE=database` em suas configurações do .env, lembre-se de executar a migração (`php artisan migrate`) após o build do projeto.

## 😊 Pronto

* Até esse passo o sistema deverá está acessível em http://localhost, conto com você para evoluirmos juntos essa ferramenta incrível.

## 📌 Versão

Para as versões disponíveis, observe o [Changelog](https://github.com/AndSants/noticias10/blob/main/changelog.md). 

## ✒️ Autores

| Nome | Email |Linkedin |
|-|-|-|
| André Santos | <andresantos.iron@gmail.com> |[linkedin](https://www.linkedin.com/in/andresantostech/)|

## 📄 Licença Privada

### Definição

Esta licença é uma licença privada e não open source. O uso do código-fonte deste projeto é restrito.

### Termos de Uso

- Para mais informações ligue 81 9 9704-4667

### Proibições

- É proibido o uso comercial deste código por terceiros sem autorização expressa.
- A redistribuição do código-fonte ou partes dele é estritamente proibida.

### Consequências da Violação

Qualquer violação dos termos desta licença resultará em ações legais conforme necessário.
