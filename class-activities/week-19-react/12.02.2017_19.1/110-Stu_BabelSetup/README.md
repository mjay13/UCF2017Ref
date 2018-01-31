# Babel Setup

## ES6 Compatibility

ES6 Compatibility Table: <http://kangax.github.io/compat-table/es6/>

* See which environments support which ES6 features! Node, browser, ewtc.

## Babel

Babel REPL: <https://babeljs.io/repl/>

* Allows you to see the conversion of ES6 -> ES5 real-time

VS Code Babel REPL Extension: <https://marketplace.visualstudio.com/items?itemName=t-sauer.vscode-babel-repl>

* Plugin for Babel REPL in VS Code

----

### Using the Babel CLI


**Step 1:** 

Copy the following command and paste it into a text editor (Sublime Text, for example):

```bash
npm install -g babel-cli babel-preset-env babel-preset-stage-2 && echo "alias bnode='babel-node --presets [paste_output_here]/env,[paste_output_here]/stage-2'" >> ~/.bash_profile
```

**Step 2:**

Copy the following command, and execute it in your Terminal:

```bash
npm root -g
```

(This command will identify the directory on your machine where global `npm` packages are installed.)

**Step 3:**

After running the command in Step 2, copy the command's output to your clipboard.

**Step 4:**

Go back to your text editor, find both places where the command says, "`[paste_output_here]`", and replace that phrase with the output you copied in Step 3.

Make sure you remove the square brackets as well: `[` `]`

**Step 5:** 

After editing the command in step 4, copy the entire command, and run it in your terminal.

**Step 6:**

To test if this process succeeded, go to the directory `111-Ins_ES2015Modules/`, and run the following command:

```bash
bnode index.js
```

Let a member of the academic instruction team know if you are experiencing any issues.

---


```bash
npm install -g babel-cli babel-preset-env babel-preset-stage-2 && echo "alias bnode='babel-node --presets env,stage-2'" >> ~/.bash_profile
```

* In short, this allows us to use Babel to run scripts using ES6 using the command `bnode` in place of `node`. For example: `bnode script.js` instead of `node script.js`.

#### Installing Babel CLI

* `npm install -g babel-cli babel-preset-env babel-preset-stage-2` - Installs the `babel-cli` (and relevant presets) so that we can run our node scripts with `babel-node` and use the new ES6+ features.

  * This allows us to do `babel-node script.js --presets env,stage-2` to run our file written in ES6.

#### The Alias (Extra)

Writing out babel-node with the presets can get old quickly. Fortunately, we can alias commands in bash.

* `&& echo "alias bnode='babel-node --presets env,stage-2'" >> ~/.bash_profile`
  
  * `&&` means "if the first command completes without error, do the following
  
  * the code following `&&` adds the line `alias bnode='babel-node --presets env,stage-2` to your `.bash_profile` file.
  
  * `alias bnode='babel-node --presets env,stage-2` - the `alias` command allows you to create shorthands for commands. For example, we could just type `bnode script.js`, which would run `babel-node --presets env,stage-2 script.js`. This allows us to not have to type out the whole command each time.
