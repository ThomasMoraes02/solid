## S.O.L.I.D com PHP

# Coesão
Uma classe que executa bem a sua única tarefa, de forma concisa.
Cada classe deve ser responsável por apenas uma coisa, e deve executar esta tarefa muito bem.

# Encapsulamento
Encapsulamento é uma forma de manter os objetos das nossas classes protegidos, fornecendo apenas o que é estritamente necessário para o mundo exterior.

# Acoplamento
Dependências entre classes

# Refatoração
É uma alteração no código que visa melhorar sua clareza e entendimento

# -------------------------------------------------------------- #

# S - Single Responsability Principle
Principio de Responsabilidade Unica, cada classe deve ter somente uma responsabilidade - Coesa
Uma classe (ou módulo, função, etc) deve ter um e apenas um motivo para mudar

# O - Open Closed Principle
Entidades devem ser abertas para expansão mas fechadas para modificação
Garantir que cada ação/responsabilidade esteja na classe correta
Cada classe deve conhecer e ser responsável por suas próprias regras de negócio

# L - Liskov Substituition Principle
Uma classe base deve poder ser substituída por suas classes filhas em qualquer lugar do código.
Se algum código depende de uma classe, qualquer classe que a estenda deve poder ser utilizada no lugar. Com isso, se um comportamento for alterado no método, resultados inesperados podem ocorrer.

# I - Interface Segregation Principle
Uma classe não pode ser forçada a depender de métodos que não utilizará

# D - Dependency Inversion Principle
Abstrações não devem depender de implementações. Implementações devem depender de abstrações.