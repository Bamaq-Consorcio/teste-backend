Instalação do projeto
Antes de começar essa etapa, garanta que os seguintes pré requisitos estão cumpridos:


1 - Com o git instalado e o terminal aberto, execute o comando abaixo, para clonar o repositório: 
``` 
git clone https://github.com/Wallacewss2033/teste-backend.git
```

2 - Instale as libs do composer com 
``` 
composer update
```

3 - Crie um um atalho do SAIL para não ter que toda hora digitar ./vendor/bin/sail e digitar apenas sail
``` 
echo "alias sail='[ -f sail ] && bash sail || bash vendor/bin/sail'" >> ~/.bashrc
source ~/.bashrc 
```


4 - Antes de executar o comando de subir a VM via SAIL copie o .env.example para .env para que as variáveis de configurações sejam as mesmas. (Isso vale para a primeira instalação)
``` cp .env.example .env ```


5 - Execute o comando 
``` 
sail up
```


6 - Execute o comando ``` sail yarn install ``` para rodar as dependências do package.json do projeto.

7 - Execute o comando ``` sail php artisan migreate ``` para rodar as migrations.

8 - Execute o comando ``` sail php artisan db:seed ``` para rodar as inserções no DB.

9 - Para fazer uma rodada e mudar as vagas no ambiente local, execute o commando ``` php artisan VacanciesRandom:random ```
