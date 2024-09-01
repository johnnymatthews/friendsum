# [Friendsum](https://johnnymatthews.github.io/friendsum/)

Yet another lorem ipsum generator. But this one uses Friends quotes instead of sudo-latin. There's a browser-based version in `./website` and a Rust CLI version in `./rust`.

## Install

You can't really _install_ a website, so just head to [johnnymatthews.github.io/friendsum](https://johnnymatthews.github.io/friendsum/) to view it.

If you want to run the Rust binary, you can grab it from the Releases section and run it wherever you want.

## Run locally

If you don't wanna use the live site, you can run things locally:

### Serve the website

You can build and run the website locally if you want.

1. Clone this repo:

    ```shell
    git clone https://github.com/johnnymatthews/friendsum
    ```

1. Install `serve` by running **one** of these commands:

    ```shell
    # NPM
    npm install --global serve
    ```

    ```shell
    # PNPM
    pnpm install --global serve
    ```
    
    ```shell
    # Yarn
    yarn install --global serve
    ```

1. Start a local server using the `./website` directory as the root:

    ```shell
    serve ./website
    ```

1. Go to [localhost:1313](http://localhost:1313) to view the site.

### Build the Rust version

Rust is fun! Build the CLI and run it locally. You'll need [Rust installed](https://www.rust-lang.org/tools/install) before you can do these steps:

1. Clone this repo:

    ```shell
    git clone https://github.com/johnnymatthews/friendsum
    cd friendsum
    ```

1. Move into the Rust directory:

    ```shell
    cd rust
    ```

1. Build using Cargo:

    ```shell
    cargo build
    ```

1. Run the `friendsum` binary you just created:

    ```shell
    ./target/debug/friendsum
    ```

1. You can move the `friendsum` binary to wherever you want, like `/usr/local/bin`:

    ```shell
    sudo mv ./target/debug/friendsum /usr/local/bin
    ```

    Now you can run `friendsum ...` from anywhere!
