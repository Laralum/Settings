<p align="center"><a href="https://laralum.com"><img height="150" src="https://avatars1.githubusercontent.com/u/22253051"></a></p>

<h1 align="center">Settings</h1>

<p align="center">
<a href="https://styleci.io/repos/81978589"><img src="https://styleci.io/repos/81978589/shield?style=flat&branch=master" alt="StyleCI"></a>
<a href="https://github.com/laralum"><img src="https://img.shields.io/badge/Built%20For-Laralum-orange.svg" alt="Laralum"></a>
<a href="https://github.com/laralum/Settings"><img src="https://poser.pugx.org/laralum/settings/d/total.svg" alt="Downloads"></a>
<a href="https://github.com/Laralum/Settings/releases"><img src="https://poser.pugx.org/laralum/settings/v/stable.svg" alt="License"></a>
<a href="https://raw.githubusercontent.com/Laralum/Settings/master/LICENSE"><img src="https://poser.pugx.org/laralum/settings/license.svg" alt="License"></a>
</p>

## Description

This module brings to you a configuration view to setup packages.

## Documentation

<p align="center">
<a href="https://laralum.com/docs/settings"><img height="120" src="http://i.imgur.com/47WnADd.png"></a>
</p>


### Working schematic

All modules that might have configuration available can use this module to store it.

It needs a view and the controller action to be done!

```
src/Settings.json
```

```
{
    "view": "laralum_module::settings"
}
```

## License

```
MIT License

Copyright (c) 2017 Laralum

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
```
