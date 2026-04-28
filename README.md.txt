PRÁTICA ORIENTADA 03

Disciplina: Programação Web I
Professor: Prof. Dr. Renato William Rodrigues de Souza
Instituição: IFCE – Campus Boa Viagem
Curso: Análise e Desenvolvimento de Sistemas

Aluna: Letícia Justino Maciel

Tema:

Evolução Arquitetural, Backend em PHP e Deploy de Sistema

Objetivo

Evoluir o sistema de pedidos desenvolvido anteriormente, transformando-o em uma aplicação mais próxima de um sistema real de mercado, utilizando boas práticas de desenvolvimento, organização em camadas, orientação a objetos e integração entre frontend e backend.

Contexto

Após a análise e refatoração de um sistema com problemas estruturais, esta atividade propõe sua reconstrução utilizando uma arquitetura mais profissional, com separação de responsabilidades, uso de padrões de projeto e implantação em ambiente real.

Arquitetura do Projeto

O sistema foi organizado utilizando arquitetura em camadas, conforme estrutura abaixo:

/project
  /backend
    /models
    /services
    /controllers
    /repositories
  /frontend
 Backend (PHP)

Foi desenvolvida uma API simples em PHP com os seguintes endpoints:

GET /pedidos → Lista todos os pedidos
POST /pedidos → Cria um novo pedido
DELETE /pedidos → Remove um pedido (opcional)

O backend concentra toda a lógica de negócio da aplicação.

Frontend

A interface foi desenvolvida de forma separada utilizando:

HTML
JavaScript (Fetch API)

A comunicação com o backend é feita exclusivamente via API, garantindo desacoplamento.

Modelagem de Classes

Foram implementadas as seguintes classes principais:

Produto
ItemPedido
Pedido

Essas classes seguem os princípios da orientação a objetos.

Padrões de Projeto Aplicados

Foram utilizados os seguintes padrões de projeto:

Factory → Criação de objetos
Singleton → Instância única de serviços
Strategy → Aplicação de descontos
Repository → Acesso e manipulação de dados
Observer → Atualização da interface
Integração com WhatsApp

O sistema permite o envio de pedidos via WhatsApp:

Para o cliente
Para o estabelecimento
Utilizando links no formato: https://wa.me/
Separação Frontend x Backend
Lógica de negócio isolada no backend
Frontend responsável apenas pela interface
Comunicação realizada via API REST
Correções Realizadas

Foram eliminados problemas estruturais como:

Uso de variáveis globais
Funções com múltiplas responsabilidades
Código duplicado
Dependência direta do DOM
Persistência de Dados

Foi utilizada uma abordagem simples de persistência com:

Arquivo JSON

(Outras opções possíveis: JSON Server ou banco de dados)

Testes

Foram implementados testes simples para:

Cálculo do valor total do pedido
Aplicação de descontos
Modelagem UML

Foi elaborado um Diagrama de Classes atualizado, representando a nova estrutura do sistema e suas relações.

Docker

O sistema foi containerizado utilizando:

Dockerfile
docker-compose.yml

Execução do projeto:

docker-compose up -d
Deploy

O sistema foi publicado em hospedagem gratuita, estando disponível através de um link público.

Conclusão

A atividade permitiu aplicar conceitos fundamentais de desenvolvimento web moderno, incluindo arquitetura em camadas, orientação a objetos, uso de padrões de projeto e deploy de aplicações. O sistema evoluiu de uma estrutura simples para uma solução mais organizada, escalável e alinhada com práticas do mercado.