# Halister

## Recommended IDE Setup

[VSCode](https://code.visualstudio.com/) + [Volar](https://marketplace.visualstudio.com/items?itemName=Vue.volar) (and disable Vetur) + [TypeScript Vue Plugin (Volar)](https://marketplace.visualstudio.com/items?itemName=Vue.vscode-typescript-vue-plugin).

## Customize configuration

See [Vite Configuration Reference](https://vitejs.dev/config/).

## Project Setup
- Apenas quando instalar novos pacotes.

```sh
npm install
```

### Compile and Hot-Reload for Development
- Executar toda vez que for desenvolver, mas lembrar de salvar TODAS as alterações antes (CTRL + S)!

```sh
npm run dev
```

- Ao final, fechar o processo (CTRL + C).

### Compile and Minify for Production
- Quando terminar de desenvolver, executar para gerar a pasta "dist".

```sh
npm run build
```

### Lint with [ESLint](https://eslint.org/)

```sh
npm run lint
```

## Commitar alterações no repositório git SEMPRE que alterar o projeto!!!
1. Usar a extensão do git do próprio VSCode.
2. Escrever uma mensagem sobre o que foi alterado.
3. Adicionar todas as alterações que deseja commitar (clicar no +).
4. Clicar em "Commit".
5. Clicar em "Sync Changes".

OBS: Fazer commits atômicos, ou seja, uma mudança por commit. 
OBS2: O "Sync Changes" pode ter vários commits.

## Colocar a pasta dist no FileZilla
1. Abrir FileZilla.
2. Clicar em Arquivo > Gerenciador de Sites.
3. Configurar host, usuário e senha.
4. Clicar em Conectar.
5. Copiar todo o conteúdo da pasta: c
6. No FileZilla, colar (ou arrastar) esse conteúdo na pasta "public_html". 
7. E é isso...
