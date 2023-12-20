# photo page for typecho

<img alt="GitHub repo size" src="https://img.shields.io/github/repo-size/zzd/photo-page-for-typecho">  <img alt="GitHub All Releases" src="https://img.shields.io/github/downloads/zzd/photo-page-for-typecho/total">  <img alt="GitHub All Releases" src="https://img.shields.io/github/downloads/zzd/photo-page-for-typecho/latest/total">  <a href="https://github.com/zzd/photo-page-for-typecho/blob/master/LICENSE"><img alt="GitHub license" src="https://img.shields.io/github/license/zzd/photo-page-for-typecho"></a>  <a href="https://github.com/zzd/photo-page-for-typecho/stargazers"><img alt="GitHub stars" src="https://img.shields.io/github/stars/zzd/photo-page-for-typecho?style=social"></a>

中文 / [English](README-EN.md)

typecho相册单页模板，单页模板非主题，可与主题共存！基于HTML5UP开发设计的静态单页，觉得好看，便整合到typecho里面，实现了动态管理。本项目仅需安装一个php文件，静态资源全球jsDelivr加速，使用方便简单。2.0版本引入了两个相册主题Multiverse和Lens，可自行选择。

在线演示(前端官方样式参考，非本项目demo)：

https://html5up.net/uploads/demos/lens/

https://html5up.net/uploads/demos/multiverse/

# 展示
### 电脑端示例

Multiverse风格
![Multiverse](https://i.loli.net/2020/05/05/HznahltXYfCgr9F.png)
Lens风格
![Lens](https://i.loli.net/2020/05/15/YrV2Mg7hocU31mk.png)


# 特性

- [x] 流畅的运行体验
- [x] 单页模板，可与主题共存
- [x] 后台编辑简单
- [x] 公共资源全球CDN加速
- [x] 支持缩略图云处理
- [x] 由HTML5UP设计前端
- [x] 两种可选样式

# 版本更新

2.0. 新增lens模板，更改整体目录结构

1.2. 修复fontawesome图标加载错误的问题，新增部分自定义字段

1.1. 重写数据读取接口，增加jsDelivr公共CDN，增加对象存储图片云处理

1.0. 初次推送

# 使用说明
### 安装

[点击下载最新版本](https://github.com/zzd/photo-page-for-typecho/releases)


将`photo-page-for-typecho`文件夹内的`.php`文件上传至你所使用的主题根目录（可选两种模板），如默认主题路径`/usr/themes/default`，然后在typecho后台创建空白单页，根据你所上传的文件，将模板选择`Multiverse风格照片集`或`Lens风格照片集`。鉴于GoogleFont服务在国内完全正常使用，暂不使用第三方镜像加速。

注：你无需下载`master`下的所有文件，静态文件均采用了jsDelivr公共CDN加速；强烈建议使用对象存储保存照片，以便程序自动调用图片云处理功能。


### 调用格式

```
标题,简介,图片链接
```

多图以回车结束，每一行代表一张图片的信息。

例如：
```
picture1,2020年01月01日拍摄,https://ww2.sinaimg.cn/large/006uAlqKgy1fzlbjrxju2j31400u04qz.jpg
picture2,2020年01月02日拍摄,https://ww2.sinaimg.cn/large/006uAlqKgy1fzlbjrxju2j31400u04qz.jpg
picture3,2020年01月03日拍摄,https://ww2.sinaimg.cn/large/006uAlqKgy1fzlbjrxju2j31400u04qz.jpg
```

### 自定义字段

[可选] `about`：控制指定位置的文本，可自定义关于等信息；

[可选] `CDN`：用以匹配你所使用的对象存储服务商，目前支持又拍云、阿里云OSS、七牛云、腾讯云，本字段目的在于使用云图像处理动态生成缩略图。对应填写内容为：`UPYUN`/`OSS`/`KODO`/`COS`；

[可选] 社交链接字段 `Twitter`, `Facebook`, `Instagram`, `GitHub`，给相应字段填入链接即可。
