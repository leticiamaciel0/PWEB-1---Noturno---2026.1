EXERCÍCIOS PRÁTICOS — CONTROLLERS NO LARAVEL

Atividade prática desenvolvida para a disciplina de Programação Web I.

IDENTIFICAÇÃO ACADÊMICA

Instituição: IFCE – Campus Boa Viagem

Curso: Análise e Desenvolvimento de Sistemas

Disciplina: Programação Web I

Professor: Renato William Rodrigues de Souza

Aluna: Letícia Justino Maciel

ESTRUTURA DE PASTAS DO PROJETO

atividade 5 - controllers/
├── app/Http/Controllers/
│   ├── AlunoController.php        (Exercício 6)
│   ├── CursoController.php        (Exercícios 1 a 5)
│   ├── DisciplinaController.php   (Exercício 7)
│   └── ProdutoController.php      (Atividade Fluxo)
├── resources/views/
│   ├── alunos/                    (index, create, show)
│   ├── cursos/                    (create, listagem)
│   ├── disciplinas/               (index, create, show)
│   └── produtos/                  (create)
├── routes/
│   └── web.php                    (Rotas do sistema)
└── README.md

RESUMO DAS ATIVIDADES DESENVOLVIDAS

Exercício 1: Criação do CursoController, método index e rota /cursos retornando texto simples.

Exercício 2: Método create retornando a view Blade cursos.create acessível em /cursos/novo.

Exercício 3: Método listagem enviando um array de cursos para a view e renderização com @foreach.

Exercício 4: Captura de parâmetros dinâmicos na URL com o método show($id) em /cursos/{id}.

Exercício 5: Criação de formulário com proteção @csrf e captura de dados POST via objeto Request no método store.

Exercício 6: Geração de AlunoController como resource com rotas otimizadas via Route::resource e views dedicadas.

Exercício 7 (Desafio): Construção isolada do DisciplinaController integrando listagem, rotas, views e parâmetros.

Atividade Prática: Isolamento do fluxo de formulários no ProdutoController, tratando requisições GET para exibição e POST para recebimento de dados.