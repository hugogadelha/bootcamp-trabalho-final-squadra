# **Guia de Parques e Cachoeiras do Brasil** 🌴🌊  

Bem-vindo ao **Guia de Parques e Cachoeiras do Brasil**, um projeto desenvolvido no **Bootcamp Drupal 2024.2** da Squadra sob a orientação do professor Vinícius Rodrigues. Este site foi projetado para oferecer informações detalhadas e organizadas sobre os parques de diversão e cachoeiras no Brasil, tornando a experiência do usuário rica, interativa e intuitiva.  

---

## **Funcionalidades Principais** 🚀  

1. **Tipos de Conteúdo**:  
   - **Cachoeiras**: Nome, descrição, altura, instruções de acesso, dificuldade, localização, site oficial e imagem.  
   - **Parques de Diversão**: Nome, descrição, tipo, localização e imagem.  

2. **Taxonomias**:  
   - **Localização**: País e estados.  
   - **Dificuldade**: Fácil, Moderado, Difícil. (Para Cachoeiras)
   - **Tipo**: Aventura, Temático, Família. (Para Parques)

3. **Blocos e Listagens**:  
   - Bloco com as **últimas 3 cachoeiras cadastradas**.  
   - Bloco com os **últimos 3 parques cadastrados** (com foto, nome, local e link).  
   - Bloco de **cachoeiras relacionadas por dificuldade** (usando filtros contextuais).
   - Bloco de **parques relacionados por localização** (usando filtros contextuais).  
   - Exibição **JSON** com listagem de todas as cachoeiras e parques. (https://projeto-bootcamp-squadra.ddev.site/rest/parques-e-cachoeiras) 

4. **Customizações**:  
   - **URLs amigáveis** para cada tipo de conteúdo.  
   - **Layout Builder** para personalizar as páginas.  
   - Filtros dinâmicos para busca e navegação.  

5. **Automatizações**:  
   - Geração de **20 conteúdos adicionais** para cachoeiras e **15 para parques** utilizando o módulo **Devel**.  

---

## **Tecnologias Utilizadas** 🛠️  

- **Drupal 11**  
- **Módulos Importantes**:  
  - Admin Toolbar  
  - Pathauto  
  - Token  
  - Devel  
  - Drush  

---

## **Como Configurar o Projeto** 🖥️  

### **Pré-requisitos**  
- PHP 8.1 ou superior  
- Composer  
- MySQL/MariaDB  
- Drush  
- DDEV (ou outro ambiente local configurado)  

### **Passo a Passo**  

```bash
git clone https://github.com/hugogadelha/bootcamp-trabalho-final-squadra
cd bootcamp-trabalho-final-squadra
composer install
ddev drush sql-cli < database/dump.sql
ddev drush cim -y
ddev drush cr
```

Acesse o site no navegador:  
[https://projeto-bootcamp-squadra.ddev.site/](https://projeto-bootcamp-squadra.ddev.site/)  

---

## **Estrutura do Projeto** 📂  

- `web/`: Diretório raiz do Drupal.  
- `config/sync/`: Configurações exportadas (YAML).  
- `database/`: Arquivo de backup do banco de dados.  
- `composer.json`: Dependências do projeto.  

---

## **Capturas de Tela** 📸  

1. **Página Inicial**  
   ![Print screen da Home Page](https://github.com/hugogadelha/bootcamp-trabalho-final-squadra/blob/main/img1.png)   

2. **Detalhes de uma Cachoeira**  
   ![Print screen dos detalhes de uma Cachoeira](https://github.com/hugogadelha/bootcamp-trabalho-final-squadra/blob/main/img2.png)   

---

## **Licença** 📜  

Este projeto foi desenvolvido para fins educacionais e não possui uma licença específica.  

---

## **Contribuições** ✨  

Contribuições são bem-vindas! Caso encontre algum problema ou tenha sugestões, sinta-se à vontade para abrir uma issue ou enviar um pull request.  

---

## **Autor** 👨‍💻  

Hugo Gadelha  
- **Contato**: hugogadelha@gmail.com  
- **GitHub**: [https://github.com/hugogadelha](https://github.com/hugogadelha)  
