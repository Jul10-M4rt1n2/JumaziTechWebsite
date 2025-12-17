# Jumazi Tech Website

Site institucional da Jumazi Tech - Desenvolvimento de soluções web com Laravel.

## 🌐 Acesso ao Site

### GitHub Pages (Versão Estática)
O site está disponível gratuitamente no GitHub Pages:
- **URL**: https://jul10-m4rt1n2.github.io/JumaziTechWebsite/
- **Status**: ✅ Hospedagem gratuita
- **Limitação**: Formulário de contato desabilitado (apenas conteúdo estático)

### Servidor de Produção (Versão Completa)
Versão completa com backend Laravel e formulário funcional hospedada em servidor SFTP privado.

## 📋 Como Publicar no GitHub Pages

Para publicar ou atualizar o site no GitHub Pages, siga as instruções detalhadas no arquivo:

**👉 [DEPLOY_GITHUB_PAGES.md](./DEPLOY_GITHUB_PAGES.md)**

### Resumo Rápido:
1. Vá para **Settings > Pages** no GitHub
2. Em **Source**, selecione **GitHub Actions**
3. Faça push para a branch `main` ou execute o workflow manualmente
4. Aguarde o deploy completar (2-3 minutos)
5. Acesse: https://jul10-m4rt1n2.github.io/JumaziTechWebsite/

## 🛠️ Tecnologias

- **Framework**: Laravel 10
- **Frontend**: Bootstrap 5, HTML5, CSS3, JavaScript
- **Hospedagem**: GitHub Pages (estático) + Servidor SFTP (dinâmico)
- **CI/CD**: GitHub Actions

## 📁 Estrutura do Projeto

```
.
├── public/              # Assets públicos e index.html estático
│   ├── index.html      # Versão estática para GitHub Pages
│   ├── css/            # Estilos
│   ├── js/             # Scripts
│   └── assets/         # Imagens e recursos
├── resources/          # Views e templates Laravel
│   └── views/          # Templates Blade
├── .github/
│   └── workflows/
│       ├── github-pages.yml  # Deploy para GitHub Pages
│       └── main.yaml         # Deploy para servidor SFTP
└── DEPLOY_GITHUB_PAGES.md    # Guia de deployment
```

## 🚀 Deploy Automático

O projeto possui dois workflows de deployment:

1. **GitHub Pages** (`.github/workflows/github-pages.yml`)
   - Acionado: Push para `main`/`master` ou manualmente
   - Destino: GitHub Pages
   - Conteúdo: Versão estática (`public/`)

2. **Servidor SFTP** (`.github/workflows/main.yaml`)
   - Acionado: Push para `master`
   - Destino: Servidor privado
   - Conteúdo: Aplicação Laravel completa

## 📞 Contato

**Júlio Martins**  
Programador PHP Laravel  
Telefone: +55 (065) 9 99232-5386

## 🔧 Desenvolvimento Local

Para rodar o projeto localmente:

```bash
# Clonar o repositório
git clone https://github.com/Jul10-M4rt1n2/JumaziTechWebsite.git
cd JumaziTechWebsite

# Instalar dependências
composer install
npm install

# Configurar ambiente
cp .env.example .env
php artisan key:generate

# Rodar o servidor
php artisan serve
```

Acesse: http://localhost:8000

## 📝 Licença

Este projeto é de propriedade da Jumazi Tech.

---

<p align="center">Desenvolvido com ❤️ por Jumazi Tech</p>
