**NewPost，可通过get或post请求发送文章的typecho插件**

**使用说明：** 

上传插件并启用，添加一位用户。用户组为编辑（为了安全）

设置验证密钥key


**通过post发表文章：** 

**请求URL：** 
- ` 你的网址/action/import `
  
**请求方式：**
- POST|GET 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|title |  是  |    string   |    标题   |
|text |  是  |    string   |    正文   |
|key |  是  |    string   |    验证密钥   |
|mid | 否  |    反序列化数组   |    分类mid   |
|fieldnames |  否  |    反序列化数组   |    自定义字段名   |
|fieldtypes |  否  |    反序列化数组   |    自定义字段类型，一般为str   |
|fieldvalues |  否  |    反序列化数组   |    自定义字段内容   |

php请求参数举例

    array('title' => $title, 'text' => $text,'fieldnames'=>serialize(array('author','url')),'fieldtypes'=>serialize(array('str','str')),'fieldvalues'=>serialize(array($author,'0')),'mid'=>serialize(array(17,2)),'key' => "yanzhengmiyao");

以上请求作用为向分类mid为17 2两个分类发表文章，并添加自定义字段author和url

下载地址：[NewPost.zip][1]


  [1]: https://github.com/iLay1678/NewPost/releases/download/v1.1/NewPost.zip
