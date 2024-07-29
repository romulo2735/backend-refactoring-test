```
Neste projeto de refatoração, foi analisado que dois pontos precisam ser modificados. 
 - Primeiro deles a validação de dados que garantes os tipos de dados de entrada,
   que impacta positivamente no quesito de segurança.
   
 - Segundo uma aplicação de um service layer para desaclopar a camada de regras de negócios
```

- Validação
    - `Request` mantém as regras de validação fora do controller e segue o princípio da separação de responsibilidades.
    - As `Requests` podem ser reutilizadas e personalizadas por diferentes controles.
    - Ligibilidade
    - Segurança, garante que os dados informados pelo cliente estão correto e ajuda a previnir injeções no código.


- Service Layer
    1. Separação de responsabilidades: A camada de serviço isola a lógica de negócios dos controladores, mantendo os
       controladores focados em manipular solicitações e respostas HTTP.

    2. Reutilização: A lógica de negócios encapsulada em serviços pode ser reutilizada em diferentes partes do
       aplicativo, em diferentes controladores ou até mesmo em diferentes projetos.

    3. Facilidade de teste: Serviços podem ser testados independentemente dos controladores. Isso facilita a criação de
       testes unitários para a lógica de negócios, melhorando a qualidade do código.

    4. Escalabilidade: À medida que o aplicativo cresce, a lógica de negócios pode se tornar complexa. Manter essa
       lógica em uma camada de serviço dedicada facilita a manutenção e a expansão do código.

    5. Consistência: Ao centralizar a lógica de negócios, garantimos que todas as partes do aplicativo usem as mesmas
       regras e processos, evitando duplicação e inconsistências. 
