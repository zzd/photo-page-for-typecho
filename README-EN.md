# photo page for typecho

<img alt="GitHub repo size" src="https://img.shields.io/github/repo-size/616620131/photo-page-for-typecho">
  <img alt="GitHub All Releases" src="https://img.shields.io/github/downloads/616620131/photo-page-for-typecho/total">
  <img alt="GitHub All Releases" src="https://img.shields.io/github/downloads/616620131/photo-page-for-typecho/latest/total">
  <a href="https://github.com/616620131/photo-page-for-typecho/blob/master/LICENSE"><img alt="GitHub license" src="https://img.shields.io/github/license/616620131/photo-page-for-typecho"></a>
  <a href="https://github.com/616620131/photo-page-for-typecho/stargazers"><img alt="GitHub stars" src="https://img.shields.io/github/stars/616620131/photo-page-for-typecho?style=social"></a>

[中文](README.md) / [English](README-EN.md)

Typecho photo page template, a single page template that is not a theme and can exist with a theme! Based on HTML5UP development design static single page, looks nice, then integrated into the typecho, to achieve dynamic management. This project requires only one PHP file to be installed, static resources global jsDelivr CDN, easy to use.Version 2.0 introduces two photo page themes Multiverse and Lens, you can choose.

Demo (HTML5UP official demo, not this project demo):

https://html5up.net/uploads/demos/lens/

https://html5up.net/uploads/demos/multiverse/

# Demo
### Computer Example

Multiverse style
![Multiverse](https://i.loli.net/2020/05/05/HznahltXYfCgr9F.png)
Lens style
![Lens](https://i.loli.net/2020/05/15/YrV2Mg7hocU31mk.png)


# Feature

- [x] Smooth running experience
- [x] Single-page template that can exist with a theme
- [x] Simple editing
- [x] Public resources global CDN
- [x] Thumbnail cloud processing support
- [x] HTML5UP design
- [x] Two optional styles

# Update

2.0. new lens template and change the overall directory tree structure

1.2. fix fontawesome icon loading error, add some custom fields

1.1. rewrite data read interface, add jsDelivr public CDN, add object storage image cloud processing

1.0. initial push

# Instructions for use
### Installation

[Download the latest version](https://github.com/616620131/photo-page-for-typecho/releases)


Upload the `.php` file in the `photo-page-for-typecho` folder to the root of the theme you are using ( optional templates), such as the default theme path `/usr/themes/default`, then create a blank single page in the background of the typecho and select either `Multiverse-style photo album` or `Lens-style photo album` based on the file you have uploaded. Since GoogleFont service is fully functional in China, third-party image acceleration is not used for the time being.

Note: You do not need to download all files under `master', static files are accelerated with jsDelivr public CDN; it is highly recommended to use object storage to save photos so that the program can automatically invoke the image cloud processing function.


### Call format

```
Title, introduction, picture link
```

Multiple images end with a carriage return, with each line representing one image of information.

Example：
```
picture1,Shot on 2020/01/01/,https://ww2.sinaimg.cn/large/006uAlqKgy1fzlbjrxju2j31400u04qz.jpg
picture2,Shot on 2020/01/02/,https://ww2.sinaimg.cn/large/006uAlqKgy1fzlbjrxju2j31400u04qz.jpg
picture3,Shot on 2020/01/03,https://ww2.sinaimg.cn/large/006uAlqKgy1fzlbjrxju2j31400u04qz.jpg
```

### Custom fields

[Optional] `about': control text in specified locations, customizable information on, etc..

[Optional] `CDN`: Used to match the object storage service provider you use, currently supports the cloud also beat cloud, Ali cloud OSS, seven niu cloud, Tencent cloud, the purpose of this field is to use cloud image processing to dynamically generate thumbnails. The corresponding fields should read: `UPYUN`/`OSS`/`KODO`/`COS`.

[Optional] Social link fields `Twitter`, `Facebook`, `Instagram`, `GitHub`, just fill in the links to the corresponding fields.
