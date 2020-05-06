# Multiverse-page for typecho

typecho相册单页模板，单页模板非主题，可与主题共存！基于HTML5UP开发设计的静态单页，觉得好看，便整合到typecho里面，实现了动态管理。本项目仅一个php文件，静态资源jsdelivr加速，使用方便简单。

在线演示(前端官方样式参考，非本项目demo)：https://html5up.net/multiverse  

# 展示
### 电脑端示例

![电脑端预览](https://i.loli.net/2020/05/05/HznahltXYfCgr9F.png)
![电脑端预览](https://i.loli.net/2020/05/05/GXh5DscFAHkmoxw.png)

### 手机端示例

![手机端预览](https://i.loli.net/2020/05/05/YmLrUiDsNuPk5Bz.jpg)

# 特性

- [x] 流畅的运行体验
- [x] 后台编辑简单
- [x] 公共资源全球CDN加速
- [x] 支持缩略图云处理
- [x] 由HTML5UP设计前端

# 版本更新

1.2. 修复fontawesome图标加载错误的问题，新增部分自定义字段

1.1. 重写数据读取接口，增加jsdelivr公共CDN，增加对象存储图片云处理

1.0. 初次推送

# 使用说明
### 安装

[点击下载最新版本](https://github.com/616620131/Multiverse-page-typecho/releases)


将`Multiverse-page-typecho`文件夹内的`photo.php`上传至你所使用的主题根目录，如默认主题路径`/usr/themes/default`，然后在typecho后台创建空白单页，模板选择`照片集`。鉴于GoogleFont服务在国内完全正常使用，暂不使用第三方镜像加速。


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

[可选] `about`：控制指定位置的文本，可自定义关于等信息;

[可选] `CDN`：用以匹配你所使用的对象存储服务商，目前支持又拍云、阿里云OSS、七牛云、腾讯云，本字段目的在于使用云图像处理动态生成缩略图。对应填写内容为：`UPYUN`/`OSS`/`KODO`/`COS`

[可选] 社交链接字段 `Twitter`, `Facebook`, `Instagram`, `GitHub`，给相应字段填入链接即可。
