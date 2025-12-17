# Como Publicar o Site no GitHub Pages

## Guia Completo para Publicação Externa

Este guia explica como publicar o site Jumazi Tech no GitHub Pages para acesso externo.

## O que é GitHub Pages?

GitHub Pages é um serviço de hospedagem gratuito do GitHub que permite publicar sites estáticos diretamente do seu repositório. É perfeito para sites de portfólio, documentação e páginas de apresentação.

## Pré-requisitos

- Repositório no GitHub (já existe: Jul10-M4rt1n2/JumaziTechWebsite)
- Permissões de administrador no repositório
- Código já está pronto com workflow de deployment

## Passos para Ativar o GitHub Pages

### 1. Acessar as Configurações do Repositório

1. Vá para o repositório no GitHub: https://github.com/Jul10-M4rt1n2/JumaziTechWebsite
2. Clique na aba **Settings** (Configurações) no topo da página
3. No menu lateral esquerdo, clique em **Pages**

### 2. Configurar a Fonte do GitHub Pages

Na página de configuração do GitHub Pages:

1. Em **Source** (Fonte), selecione **GitHub Actions**
2. Isso permitirá que o workflow automático faça o deploy do site

### 3. Fazer o Deploy

1. Faça um push para a branch `main` ou `master`:
   ```bash
   git push origin main
   ```
   
2. Ou execute o workflow manualmente:
   - Vá para a aba **Actions** no GitHub
   - Selecione o workflow "Deploy to GitHub Pages"
   - Clique em **Run workflow**
   - Selecione a branch e clique em **Run workflow**

### 4. Aguardar o Deploy

O processo de deployment leva alguns minutos:
- Você pode acompanhar o progresso na aba **Actions**
- Quando concluído, você verá um checkmark verde ✓

### 5. Acessar o Site

Após o deployment bem-sucedido, seu site estará disponível em:

```
https://jul10-m4rt1n2.github.io/JumaziTechWebsite/
```

## Estrutura dos Arquivos

- **`public/index.html`** - Versão estática do site para GitHub Pages
- **`.github/workflows/github-pages.yml`** - Workflow de deployment automático
- **`public/`** - Diretório com todos os assets (CSS, JS, imagens)

## Observações Importantes

### Sobre o Formulário de Contato

⚠️ **Importante**: O formulário de contato está desabilitado na versão do GitHub Pages porque:
- GitHub Pages só hospeda arquivos estáticos (HTML, CSS, JS)
- Não suporta PHP ou Laravel (necessário para processar o formulário)
- Não pode enviar emails sem um backend

**Alternativas para o formulário:**
1. Use o telefone exibido no site: +55 (065) 9 99232-5386
2. Integre com um serviço de formulários de terceiros como:
   - [Formspree](https://formspree.io/)
   - [Netlify Forms](https://www.netlify.com/products/forms/)
   - [Google Forms](https://www.google.com/forms/about/)

### Deployment Atual (SFTP)

O workflow existente (`main.yaml`) continua funcionando e faz deploy para o servidor SFTP.
Agora você tem duas opções:
1. **GitHub Pages** - Hospedagem gratuita, sem formulário funcional
2. **Servidor SFTP** - Hospedagem paga, com formulário funcional e backend PHP/Laravel

## Personalização do Domínio (Opcional)

Se você quiser usar um domínio personalizado (ex: `www.jumazitech.com`):

1. Vá para **Settings > Pages**
2. Em **Custom domain**, insira seu domínio
3. Configure os registros DNS do seu domínio:
   ```
   CNAME -> jul10-m4rt1n2.github.io
   ```

## Atualizações Futuras

Sempre que você fizer alterações:
1. Edite o arquivo `public/index.html`
2. Faça commit e push:
   ```bash
   git add .
   git commit -m "Atualização do site"
   git push origin main
   ```
3. O GitHub Actions automaticamente fará o redeploy

## Solução de Problemas

### O site não está acessível
- Verifique se o GitHub Pages está ativado em Settings > Pages
- Confirme que o workflow foi executado com sucesso em Actions
- Aguarde alguns minutos após o primeiro deploy

### Mudanças não aparecem
- Limpe o cache do navegador (Ctrl + Shift + R ou Cmd + Shift + R)
- Verifique se o commit foi feito na branch correta
- Confirme que o workflow foi executado

### Erro 404
- Certifique-se de que existe um arquivo `index.html` no diretório `public/`
- Verifique o caminho das imagens e arquivos CSS/JS

## Suporte

Para mais informações sobre GitHub Pages:
- [Documentação oficial do GitHub Pages](https://docs.github.com/pt/pages)
- [Guia de início rápido](https://docs.github.com/pt/pages/quickstart)

## Resumo dos Comandos

```bash
# Ver status do repositório
git status

# Adicionar alterações
git add .

# Fazer commit
git commit -m "Descrição das mudanças"

# Enviar para o GitHub
git push origin main

# Ver histórico
git log --oneline
```

---

**Desenvolvido por**: Júlio Martins - Programador PHP Laravel
**Contato**: +55 (065) 9 99232-5386
