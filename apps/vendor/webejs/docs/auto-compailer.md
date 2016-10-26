# How to create auto compiler

ke path root config webpack
`VENDOR/webejs/public`

jalankan perintah
`webpack --watch`
atau
`webpack --progress --colors --watch`

## How to Autoreload Browser

buka tab terminal lagi tanpa melakukan kill pada command `webpack`

jalankan perintah
`webpack-dev-server --progress --colors`

dan tambahkan script pada halaman

```
<script src="http://localhost:8080/webpack-dev-server.js"></script>
```