# Hortjobi - Planejamento de Projeto e Fluxo de Trabalho

Este repositório contém o projeto **Hortjobi**, que foi estruturado utilizando boas práticas de versionamento e fluxo de trabalho com Git e GitHub. Abaixo, você encontrará um guia explicando como o planejamento de projeto foi realizado e as ferramentas que foram integradas para otimizar o desenvolvimento e a colaboração no projeto.

## Planejamento de Projeto no Jira

O planejamento deste projeto foi realizado no Jira, utilizando **boards ágeis** para organizar as tarefas e garantir a entrega contínua de funcionalidades. Para acessar as tarefas e o progresso do projeto, consulte o board do Jira (link do projeto Jira, se disponível). Abaixo estão as etapas que foram seguidas para garantir uma boa gestão do projeto:

- **Planejamento de Tarefas**: As tarefas foram definidas e priorizadas no Jira.
- **Acompanhamento de Tarefas**: O andamento de cada tarefa foi monitorado e atualizado no board do Jira.

## Conectando Jira com GitHub

A integração entre o **Jira** e o **GitHub** foi configurada para melhorar o acompanhamento e a automação dos processos de desenvolvimento. Com a integração, as mudanças feitas nas branches do GitHub podem ser automaticamente refletidas no Jira, permitindo uma visualização em tempo real do progresso do desenvolvimento.

- **Automatização de Issues**: Os commits realizados no GitHub podem ser automaticamente vinculados às tarefas do Jira, facilitando o gerenciamento de atividades.

## Estrutura das Branches

As branches do projeto foram estruturadas em duas categorias principais:

1. **Branches Fixas**: São as branches principais que representam versões estáveis do código.
    - `main`: A branch principal do projeto, onde a versão de produção é mantida.
    - `develop`: A branch de desenvolvimento, onde as novas funcionalidades são integradas antes de serem mescladas na branch `main`.

2. **Branches Temporárias**: São usadas para o desenvolvimento de funcionalidades específicas e testes.
    - `feature/{nome-da-funcionalidade}`: Usadas para o desenvolvimento de novas funcionalidades.
    - `bugfix/{nome-do-bug}`: Usadas para corrigir bugs específicos.
    - `hotfix/{nome-do-hotfix}`: Usadas para correções urgentes que precisam ser feitas diretamente na `main`.

## Gitflow e Testes com Robot Framework

O **Gitflow** foi adotado para gerenciar o ciclo de vida das branches de forma estruturada. Além disso, a aplicação é testada de forma automatizada utilizando o **Robot Framework**, garantindo que as funcionalidades estejam funcionando corretamente a cada nova alteração no código.

- **Fluxo de Git**: O fluxo de trabalho do Git foi estruturado para garantir a revisão e a qualidade do código antes de ser mesclado à branch `main`.
- **Testes Automatizados**: O **Robot Framework** é utilizado para realizar testes automatizados da aplicação, garantindo que os testes sejam feitos em todas as mudanças.

## Geração de Evidências

Evidências de progresso e testes são geradas e documentadas em apresentações no formato **PPT** para facilitar o acompanhamento do desenvolvimento.

- **PPT**: As evidências dos testes e do desenvolvimento são apresentadas regularmente em formato de slides, para visualização e análise da equipe.

## Fluxo de Commit e Pull Request

O fluxo de trabalho para commits e pull requests segue as seguintes etapas:

1. **Commit**: Após o desenvolvimento ou correção, um commit é feito com uma mensagem clara e objetiva.
2. **Push**: O commit é enviado para a branch do GitHub correspondente.
3. **Pull Request**: Um pull request é aberto para a revisão do código.
4. **Revisão e Aprovação**: O código é revisado por outro membro da equipe e, se aprovado, o pull request é aceito.
5. **Merge**: O código é mesclado na branch de desenvolvimento ou produção, dependendo do tipo de alteração.

## Vídeo do Fluxo de Trabalho

Um vídeo demonstrando o fluxo completo do processo de commit, push, pull request, aprovação e merge será gerado e compartilhado para facilitar o entendimento do processo.

---

Para mais informações, consulte o [repositório no GitHub](https://github.com/GuilhLopes/Hortjobi).

O grupo é composto:
Gabriel Zanoni Herculano
Guilherme Marques Lopes