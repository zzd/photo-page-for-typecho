# Multiverse-page
typecho单页模板，相册页面。原为HTML5 UP开发设计的静态单页，觉得好看，便整合到typecho里面，实现了动态管理。
## 使用说明
### 安装
将文件上传至你所使用的主题根目录即可，如默认主题`localhost/usr/themes/default`
### 调用格式
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
