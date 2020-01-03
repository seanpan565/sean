## 项目简介
### 还有几个模块年后再完成

1. 这个商城基于是ThinkPHP5.0.13 + layui2.2.45 + Mysql开发的，初始模块为[Tplay](http://tplay.pengyichen.cn/)，作为商城开发的思路概括。项目整合了第四方支付，邮箱手机注册登录，redis秒杀等功能，基本全部由ajax作为异步请求操作，[商城演示](https://www.leylgt.info)，记得点个star哦。

2. 前台模块下载请点击这里，百度网盘链接: https://pan.baidu.com/s/1dBOzlGmer159bhpNvx9ENw 提取码: xmnh

3. 商城的开发逻辑参考由一下组成
    [阿西里西多店铺商城系统视频教程](https://bbs.axlix.com/thread-214-1-1.html)
    [电商产品退货退款](http://www.woshipm.com/pd/835836.html)
    [商品的sku设计](https://yq.aliyun.com/articles/658078)
    [商品的sku设计2](https://www.ahoom.cn/994.html)
    [商城后台操作参考](http://www.macrozheng.com/admin/index.html#/oms/orderDetail?id=12)


4. 二次开发请参考 [ThinkPHP5完全开发手册](http://www.kancloud.cn/manual/thinkphp5)

5. 将你的域名指向根目录下的public目录（重要）,详情请看这里 [服务环境部署](#服务环境部署)

6. 默认管理员账户：`admin` 密码：`123456`

7. 如果你用到了短信配置，请前往阿里大鱼官网申请下载自己的sdk文件，替换/extend/dayu下的文件，在后台配置自己的appkey即可，短信宝短信请到短信宝官网注册账号

8. 支付模块由于政策限制，我这里使用的是第四方支付，具体开发文档请自行查看。项目这填写设置里的虎皮椒账号密匙即可

9. 物流物块用的是快递100的api，具体开发文档请自行查看。

## 目录结构

初始的目录结构如下：

~~~
www  WEB部署目录（或者子目录）
├─app           		应用目录
│  ├─admin              Tplay核心目录
│  │  ├─config.php      模块配置文件
│  │  ├─common.php      模块函数文件
│  │  ├─controller      控制器目录
│  │  ├─model           模型目录
│  │  ├─view            视图模板目录
│  │
│  ├─command.php        命令行工具配置文件
│  ├─common.php         公共函数文件
│  ├─config.php         公共配置文件
│  ├─route.php          路由配置文件
│  ├─tags.php           应用行为扩展定义文件
│  └─database.php       数据库配置文件
│
├─public                WEB目录（对外访问目录）
│  ├─static          	css、js等资源目录
│  │   ├─admin          	Tplay后台css、js文件
│  │   ├─public         	公共css、js文件
│  ├─uploads          图片等资源文件
│  ├─index.php          入口文件
│  ├─router.php         快速测试文件
│  └─.htaccess          用于apache的重写
│
├─simport              框架系统目录
│  ├─thinkphp             thinkphp核心文件
│  ├─extend          扩展类库目录
│  └─vendor          第三方类库目录（Composer依赖库
│
├─runtime               应用的运行时目录（可写，可定制）
├─build.php             自动生成定义文件（参考）
├─composer.json         composer 定义文件
├─LICENSE.txt           授权说明文件
├─README.md             README 文件
├─think                 命令行入口文件
├─tplay.sql             Tplay框架sql文件
~~~
