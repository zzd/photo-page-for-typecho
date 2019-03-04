# Multiverse-page for typecho
typecho单页模板，相册页面。原为HTML5 UP开发设计的静态单页，觉得好看，便整合到typecho里面，实现了动态管理。
## 示例
在线演示：https://html5up.net/multiverse   
截图：
![电脑预览](https://ww2.sinaimg.cn/large/006uAlqKgy1fzmaw48i3rj311o0ovdh9.jpg)
![电脑预览](https://ww2.sinaimg.cn/large/006uAlqKgy1fzmaxnswvej311q0ovt9u.jpg)
![手机预览](https://ww2.sinaimg.cn/large/006uAlqKgy1fzmay21sp1j30bi0kgaa8.jpg)
![手机预览](https://ww2.sinaimg.cn/large/006uAlqKgy1fzmay93rd6j30bi0kgt94.jpg)
## 使用说明
### 安装
[点击下载1.0版本文件](https://github.com/616620131/Multiverse-page-typecho/releases)

将`Multiverse-page-typecho-1.0`文件夹内的所有文件上传至你所使用的主题根目录，如默认主题`localhost/usr/themes/default`，然后在typecho后台创建空白单页，模板选择`照片集`。
### 调用格式
以以下格式编辑单页内容即可。
格式为js数组，如
```
{
  "大图": "https://ww2.sinaimg.cn/large/006uAlqKgy1fzlbjrxju2j31400u04qz.jpg",
  "预览图": "https://ww2.sinaimg.cn/mw690/006uAlqKgy1fzlbjrxju2j31400u04qz.jpg",
  "标题": "Greater Wild Goose Pagoda",
  "简介": "2017年06月15日 by iPhone 7Plus"
}
```
每两个之间使用英文逗号，最后一个不使用。
字段`about`控制指定位置的文本，可填写关于等信息。
##### 注意
该页面的标题就为单页的标题。
