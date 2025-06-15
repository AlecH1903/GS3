
# 📄 Verda Volt

## 🚗 Sobre o Projeto

Este projeto é uma **Loja Virtual de Carros Elétricos**, desenvolvida como trabalho acadêmico para a disciplina de **Laboratório de Software e Gestão de Startup 3 (GS3) com PHP e MySQL**.

O sistema permite ao usuário:

- Navegar por modelos de carros
- Personalizar suas escolhas
- Efetuar compras
- Gerenciar conta e dados pessoais
- Recuperar senha via e-mail
- Assinar plano com descontos exclusivos

---

## 🎯 Funcionalidades Implementadas

✅ Cadastro de Usuário  
✅ Login com senha criptografada (`password_hash`)  
✅ Recuperação de senha com envio real de código por e-mail  
✅ Upload de foto de perfil  
✅ Edição de dados pessoais  
✅ Garagem com histórico de compras  
✅ Personalização de carro (modelo, cor, rodas, interior)  
✅ Sistema de assinatura com desconto automático  
✅ Feedback visual (UI/UX) com mensagens amigáveis  
✅ Design moderno em preto e branco  
✅ Proteção contra SQL Injection com **Prepared Statements**

---

## 🔒 Segurança Aplicada

- Uso de **Prepared Statements (MySQLi)**
- Validação de inputs
- Controle de sessões seguras
- Hash seguro de senhas
- Tratamento de erros sem exposição de mensagens técnicas
- Estrutura de banco com **chaves estrangeiras**

---

## 🗂️ Estrutura de Pastas

```
📂 Verda_Volt/
├── 📂 code/
├── 📂 css/
├── 📂 imagens/
├── 📂 js/
├── 📂 m3/
├── 📂 main/
├── 📂 models/
├── 📂 ms/
├── 📂 mx/
├── 📂 my/
├── 📄 cadastro.php
├── 📄 login.php
├── 📄 codemail.php
├── 📄 compra.php
├── 📄 estradacima.jpg
├── 📄 inipage.php
├── 📄 inventario.php
├── 📄 m3home.php
├── 📄 maproject.php
├── 📄 model3.php
├── 📄 modelx.php
├── 📄 modely.php
├── 📄 mshome.php
├── 📄 mxhome.php
├── 📄 myhome.php
├── 📄 recuperacao.php
├── 📄 redefinirSenha.php
├── 📄 sobrenos.php
└── 📄 verdavolt.php
```

---

## 🧱 Estrutura do Banco de Dados (cadastro_db.sql)

**Tabelas principais:**

| Tabela | Finalidade |
|---|---|
| `usuarios` | Dados dos usuários (CPF, nome, e-mail, senha, foto, etc) |
| `assinaturas` | Controle de status, datas e status da assinatura |
| `carros_info` | Informações sobre os modelos de carros |
| `compras` | Histórico de compras de cada usuário |

Principais características do banco:

- Uso de chaves estrangeiras

- Uso de auto-incremento

- Integridade referencial garantida

---

## ⚙️ Como Executar Localmente

1. Clone ou baixe o projeto.
2. Crie um banco MySQL chamado `cadastro_db`.
3. Importe o arquivo **`cadastro_db.sql`**.
4. Edite a conexão com o banco no arquivo `conexao.php` dentro da pasta `/code/`.
5. Inicie o servidor local (XAMPP/WAMP).
6. Acesse:  
```
http://localhost/Verda_Volt/
```

---

## 🧪 Testes Recomendados

- Cadastro de usuário
- Login com credenciais válidas
- Teste de recuperação de senha
- Upload de foto de perfil
- Simulação de compra de carro
- Aplicação de desconto para assinante
- Teste de SQL Injection

---

## 💡 Melhorias Futuras

- Área administrativa
- Dashboard de estatísticas
- Filtros avançados de busca de veículos
- Integração com simulação de pagamento
- Sistema de avaliação de veículos

---

## 👨‍💻 Desenvolvedor

**Aluno:** Alec Haded  
**Disciplina:** Laboratório de Software / Gestão de Startup 3 (GS3)  
**Professor Avaliador:** Héden Silva

---

*Este projeto foi desenvolvido com foco em boas práticas, segurança e experiência do usuário.*
