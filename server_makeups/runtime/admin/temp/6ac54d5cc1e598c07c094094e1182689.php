<?php /*a:5:{s:68:"/var/www/guju/CRMEB/crmeb/app/admin/view/store/copy_taobao/index.php";i:1573123681;s:61:"/var/www/guju/CRMEB/crmeb/app/admin/view/public/container.php";i:1573123681;s:62:"/var/www/guju/CRMEB/crmeb/app/admin/view/public/frame_head.php";i:1573123681;s:57:"/var/www/guju/CRMEB/crmeb/app/admin/view/public/style.php";i:1573123681;s:64:"/var/www/guju/CRMEB/crmeb/app/admin/view/public/frame_footer.php";i:1573123681;}*/ ?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php if(empty($is_layui) || (($is_layui instanceof \think\Collection || $is_layui instanceof \think\Paginator ) && $is_layui->isEmpty())): ?>
    <link href="/system/frame/css/bootstrap.min.css?v=3.4.0" rel="stylesheet">
    <?php endif; ?>
    <link href="/static/plug/layui/css/layui.css" rel="stylesheet">
    <link href="/system/css/layui-admin.css" rel="stylesheet">
    <link href="/system/frame/css/font-awesome.min.css?v=4.3.0" rel="stylesheet">
    <link href="/system/frame/css/animate.min.css" rel="stylesheet">
    <link href="/system/frame/css/style.min.css?v=3.0.0" rel="stylesheet">
    <script src="/system/frame/js/jquery.min.js"></script>
    <script src="/system/frame/js/bootstrap.min.js"></script>
    <script src="/static/plug/layui/layui.all.js"></script>
    <script>
        $eb = parent._mpApi;
        window.controlle="<?php echo strtolower(trim(preg_replace("/[A-Z]/", "_\\0", app('request')->controller()), "_"));?>";
        window.module="<?php echo app('request')->app();?>";
    </script>



    <title></title>
    
<style>
    #app .layui-form-label{padding: 9px 15px;width: 80px;}
    #app .layui-input-margin-5{margin-top: 5px}
    #app .layui-input-image{width: 100px;height: 100px;}
    #app .layui-box{width:100px;height:140px;display: inline-block;margin-right: 10px;margin-bottom: 10px;padding: 2px;border: 1px dashed #0d8ddb;border-radius: 3px;text-align: center;}
    #app .layui-box img{width: 100px;height: 100px;margin: 0 auto;display: block;}
    #app .layui-box.box-border-color{border: 1px solid #0bb20c;}
    #app .layui-box .layui-text{background: rgba(0,0,0,.3);}
    #app .layui-box .layui-text p{width: 50%;display: inline;text-align: center;}
    #app .spinner {margin: 50px auto;width: 50px;height: 60px;text-align: center;font-size: 10px;}
    #app .spinner > div {background-color: #0092DC;height: 100%;width: 6px;display: inline-block;-webkit-animation: stretchdelay 1.2s infinite ease-in-out;animation: stretchdelay 1.2s infinite ease-in-out;}
    #app .spinner .rect2 {-webkit-animation-delay: -1.1s;animation-delay: -1.1s;}
    #app .spinner .rect3 {-webkit-animation-delay: -1.0s;animation-delay: -1.0s;}
    #app .spinner .rect4 {-webkit-animation-delay: -0.9s;animation-delay: -0.9s;}
    #app .spinner .rect5 {-webkit-animation-delay: -0.8s;animation-delay: -0.8s;}
    #app .save-button{position: fixed;width: 100%;bottom: 0;}
    @-webkit-keyframes stretchdelay { 0%, 40%, 100% { -webkit-transform: scaleY(0.4) } 20% { -webkit-transform: scaleY(1.0) } }
    @keyframes stretchdelay { 0%, 40%, 100% {transform: scaleY(0.4);-webkit-transform: scaleY(0.4);}  20% {transform: scaleY(1.0);-webkit-transform: scaleY(1.0);} }
</style>

    <!--<script type="text/javascript" src="/static/plug/basket.js"></script>-->
<script type="text/javascript" src="/static/plug/requirejs/require.js"></script>
<?php /*  <script type="text/javascript" src="/static/plug/requirejs/require-basket-load.js"></script>  */ ?>
<script>
    var hostname = location.hostname;
    if(location.port) hostname += ':' + location.port;
    requirejs.config({
        map: {
            '*': {
                'css': '/static/plug/requirejs/require-css.js'
            }
        },
        shim:{
            'iview':{
                deps:['css!iviewcss']
            },
            'layer':{
                deps:['css!layercss']
            }
        },
        baseUrl:'//'+hostname+'/',
        paths: {
            'static':'static',
            'system':'system',
            'vue':'static/plug/vue/dist/vue.min',
            'axios':'static/plug/axios.min',
            'iview':'static/plug/iview/dist/iview.min',
            'iviewcss':'static/plug/iview/dist/styles/iview',
            'lodash':'static/plug/lodash',
            'layer':'static/plug/layer/layer',
            'layercss':'static/plug/layer/theme/default/layer',
            'jquery':'static/plug/jquery/jquery.min',
            'moment':'static/plug/moment',
            'sweetalert':'static/plug/sweetalert2/sweetalert2.all.min',
            'formCreate':'/static/plug/form-create/form-create.min',

        },
        basket: {
            excludes:['system/js/index','system/util/mpVueComponent','system/util/mpVuePackage']
//            excludes:['system/util/mpFormBuilder','system/js/index','system/util/mpVueComponent','system/util/mpVuePackage']
        }
    });
</script>
<script type="text/javascript" src="/system/util/mpFrame.js"></script>
    
</head>
<body class="gray-bg">
<div class="wrapper wrapper-content">

<div class="layui-fluid">
    <div class="layui-row layui-col-space15"  id="app" v-cloak="">
        <div class="layui-col-md12">
            <div class="layui-card">
                <div class="layui-card-body">
                    <blockquote class="layui-elem-quote layui-quote-nm">
                        <p style="color: red">注意：当前采集方式为免费采集，受到淘宝店铺影响需要登陆才可以访问产品详情，可能会导致采集程序不稳定，都属于正常现象，尽情谅解，后期会开发出付费接口采集保证稳定采集！</p>
                        链接格式说明： 输入以http或https开头的淘宝、天猫、1688、京东的商品详情页网址，网址正确且商品信息存在时才能入库成功。生成的产品默认是没有上架的，请手动上架产品！轮播图选中的颜色是绿色边框的请注意
                    </blockquote>
                    <div class="layui-form-item">
                        <label class="layui-form-label">链接地址</label>
                        <div class="layui-input-block">
                            <input type="text" style="width: 80%;display: inline-block;vertical-align: middle" v-model="link"  autocomplete="off" placeholder="链接地址" class="layui-input">
                            <button @click="checkUrl" class="layui-btn layui-btn-sm layui-btn-normal" lay-submit="search" lay-filter="search" style="vertical-align: middle">
                                <i class="layui-icon layui-icon-add-1"></i>确定</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="layui-card" v-if="isLink && link">
                <div class="layui-card-header">商品编辑</div>
                <div class="layui-card-body">
                    <form class="layui-form" action="">
                        <div class="layui-form-item">
                            <label class="layui-form-label">选择分类</label>
                            <div class="layui-input-block">
                                <select name="cate_id" v-model="productInfo.cate_id" lay-verify="cate_id" lay-filter="cate_id">
                                    <option value="">请选择</option>
                                    <option :value="item.value" v-for="item in categoryList" :disabled="item.disabled" v-text="item.label"></option>
                                </select>
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <label class="layui-form-label">产品名称</label>
                            <div class="layui-input-block">
                                <input type="text" name="title"  v-model="productInfo.store_name" autocomplete="off" placeholder="请输入产品名称" class="layui-input">
                            </div>
                        </div>
                        <div class="layui-form-item layui-form-text">
                            <label class="layui-form-label">产品简介</label>
                            <div class="layui-input-block">
                                <textarea placeholder="请输入内容" class="layui-textarea" v-model="productInfo.store_info"></textarea>
                            </div>
                        </div>
                        <div class="layui-form-item layui-input-margin-5">
                            <div class="layui-inline">
                                <label class="layui-form-label">产品关键字</label>
                                <div class="layui-input-inline">
                                    <input type="text" name="text"  autocomplete="off" class="layui-input" v-model="productInfo.keyword">
                                </div>
                            </div>
                            <div class="layui-inline">
                                <label class="layui-form-label">产品单位</label>
                                <div class="layui-input-inline">
                                    <input type="text" name="text"  autocomplete="off" class="layui-input" v-model="productInfo.unit_name">
                                </div>
                            </div>
                            <div class="layui-inline">
                                <label class="layui-form-label">产品售价</label>
                                <div class="layui-input-inline">
                                    <input type="number" name="number"  autocomplete="off" class="layui-input" v-model="productInfo.price">
                                </div>
                            </div>
                        </div>
                        <div class="layui-form-item layui-input-margin-5">
                            <div class="layui-inline">
                                <label class="layui-form-label">产品市场价</label>
                                <div class="layui-input-inline">
                                    <input type="number" name="number"  autocomplete="off" class="layui-input" v-model="productInfo.ot_price">
                                </div>
                            </div>
                            <div class="layui-inline">
                                <label class="layui-form-label">赠送积分</label>
                                <div class="layui-input-inline">
                                    <input type="number" name="number"  autocomplete="off" class="layui-input" v-model="productInfo.give_integral">
                                </div>
                            </div>
                            <div class="layui-inline">
                                <label class="layui-form-label">邮费</label>
                                <div class="layui-input-inline">
                                    <input type="number" name="number"  autocomplete="off" class="layui-input" v-model="productInfo.postage">
                                </div>
                            </div>
                        </div>
                        <div class="layui-form-item layui-input-margin-5">
                            <div class="layui-inline">
                                <label class="layui-form-label">虚拟销量</label>
                                <div class="layui-input-inline">
                                    <input type="number" name="number"  autocomplete="off" class="layui-input" v-model="productInfo.ficti">
                                </div>
                            </div>
                            <div class="layui-inline">
                                <label class="layui-form-label">库存</label>
                                <div class="layui-input-inline">
                                    <input type="number" name="number"  autocomplete="off" class="layui-input" v-model="productInfo.stock">
                                </div>
                            </div>
                            <div class="layui-inline">
                                <label class="layui-form-label">产品成本价</label>
                                <div class="layui-input-inline">
                                    <input type="number" name="number"  autocomplete="off" class="layui-input" v-model="productInfo.cost">
                                </div>
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <label class="layui-form-label">产品主图片(305*305px)</label>
                            <div class="layui-input-block">
                                <div class="layui-box box-border-color" style="height: 100px;">
                                    <img :src="productInfo.image" alt="" class="layui-input-image" @click="lookImage(productInfo.image)">
                                </div>
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <label class="layui-form-label">产品轮播图(640*640px)</label>
                            <div class="layui-input-block">
                                <div class="layui-box" :class="item.isSelect ? 'box-border-color':'' " v-for="(item,index) in productInfo.slider_image" >
                                    <img :src="item.pic" alt="" class="layui-input-image" @click="lookImage(item.pic)">
                                    <div class="layui-btn-group" style="margin-top: 12px">
                                        <button type="button" class="layui-btn layui-btn-primary layui-btn-sm" @click=" productInfo.image=item.pic ">主图</button>
                                        <button type="button" class="layui-btn layui-btn-primary layui-btn-sm" @click="item.isSelect = !item.isSelect">{{ item.isSelect ? '移除': '选中' }}</button>
                                    </div>
                                </div>
                            </div>
                        </div>
<!--                        <div class="layui-form-item" v-if="productInfo.description_images.length">-->
<!--                            <label class="layui-form-label">详情图片</label>-->
<!--                            <div class="layui-input-block">-->
<!--                                <div class="layui-box" :class="item.isSelect ? 'box-border-color':'' " v-for="(item,index) in productInfo.description_images" >-->
<!--                                    <img :src="item.pic" alt="" class="layui-input-image" @click="lookImage(item.pic)">-->
<!--                                    <div class="layui-btn-group" style="margin-top: 12px">-->
<!--                                        <button type="button" class="layui-btn layui-btn-primary layui-btn-sm" @click="item.isSelect = !item.isSelect">{{ item.isSelect ? '移除': '选中' }}</button>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
                        <div class="layui-form-item layui-input-margin-5" style="margin-bottom: 40px;">
                            <label class="layui-form-label">详情内容</label>
                            <div class="layui-input-block">
                                <textarea id="description" style="display: none;" class="layui-textarea" v-model="productInfo.description"></textarea>
                            </div>
                        </div>
                    </form>
                </div>
                <button class="layui-btn save-button" type="button" @click="saveProduct">立即保存</button>
            </div>
            <div class="layui-card" v-if="isLink==false && link && loading">
                <div class="spinner">
                    <div class="rect1"></div>
                    <div class="rect2"></div>
                    <div class="rect3"></div>
                    <div class="rect4"></div>
                    <div class="rect5"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="/system/js/layuiList.js"></script>



<script>
    layList.form.render();
    require(['vue'],function(Vue) {
        new Vue({
            el: "#app",
            data: {
                categoryList:<?=json_encode($menus)?>,
                link:'',
                linkhistory:'',
                isLink:false,
                loading:false,
                productInfo:{
                    description_images:[],
                },
                slider_image:[],
                editIndex:0,
            },
            methods:{
                checkUrl:function () {
                    if(!this.link) return layList.msg('请输入链接地址');
                    if(this.link==this.linkhistory) return false;
                    this.linkhistory=this.link;
                    this.loading=true;
                    layList.basePost(layList.U({a:'get_request_contents'}),{link:this.link},function (res) {
                        this.loading=false;
                        this.linkhistory='';
                        var slider_image=res.data.slider_image,slider_image_new=[],description_images=res.data.description_images,description_images_new=[];
                        for (var i=0;i<slider_image.length;i++){
                            slider_image_new.push({pic:slider_image[i],isSelect:true});
                        }
                        for(var k=0;k<description_images.length;k++){
                            description_images_new.push({pic:description_images[k],isSelect:true});
                        }
                        res.data.slider_image=slider_image_new;
                        res.data.description_images=description_images_new;
                        this.productInfo=res.data;
                        this.isLink=true;
                        this.$set(this,'productInfo',this.productInfo);
                        this.$nextTick(function () {
                            layList.form.render('select');
                            this.editIndex=layList.layedit.build('description',{
                                tool: ['strong', 'italic', 'underline', 'del','|', 'left','center','right','link','unlink','face']
                            });
                        }.bind(this));
                    }.bind(this),function (res) {
                        this.loading=false;
                        this.linkhistory='';
                        layList.msg(res.msg);
                    }.bind(this));
                },
                lookImage:function (pic) {
                    if($eb) $eb.openImage(pic);
                },
                saveProduct:function () {
                    var that=this,productInfo={
                        cate_id:that.productInfo.cate_id,
                        store_name:that.productInfo.store_name,
                        store_info:that.productInfo.store_info,
                        ficti:that.productInfo.ficti,
                        unit_name:that.productInfo.unit_name,
                        slider_image:that.productInfo.slider_image,
                        price:that.productInfo.price,
                        image:that.productInfo.image,
                        keyword:that.productInfo.keyword,
                        give_integral:that.productInfo.give_integral,
                        give_integral:that.productInfo.give_integral,
                        ot_price:that.productInfo.ot_price,
                        stock:that.productInfo.stock,
                        cost:that.productInfo.cost,
                        postage:that.productInfo.postage,
                        description:that.productInfo.description,
                        description_images:that.productInfo.description_images,
                        soure_link:that.link,
                    };
                    if(!that.productInfo.cate_id) return layList.msg('请选择分类');
                    if(!that.productInfo.store_name) return layList.msg('请填写商品名称');
                    if(!that.productInfo.unit_name) return layList.msg('请填写产品单位');
                    if(!that.productInfo.price) return layList.msg('请填写产品价格');
                    if(!that.productInfo.ot_price) return layList.msg('请填写产品市场价');
                    if(!that.productInfo.cost) return layList.msg('请填写产品成本价');
                    if(!that.productInfo.stock) return layList.msg('请填写产品库存');
                    productInfo.slider_image=that.setArraySelect(productInfo.slider_image);
                    productInfo.description_images=that.setArraySelect(productInfo.description_images);
                    productInfo.description=layList.layedit.getContent(that.editIndex);
                    layList.layer.confirm('保存产品生成图片可能较慢，保存中请耐心等待，请不要关闭窗口！确认生成产品和图片吗？', {
                        btn: ['确定生成','我在想想'] //按钮
                    }, function(){
                        var index=layList.layer.load(1, {shade: [0.5,'#000000']});
                        layList.basePost(layList.U({a:'save_product'}),productInfo,function (res) {
                            layList.layer.close(index);
                            layList.msg(res.msg,function () {
                                var res=layList.layer.confirm('是否要继续添加？', {
                                    btn: ['是的','不了我要关闭'] //按钮
                                },function () {
                                    that.productInfo={description_images:[]};
                                    that.link='';
                                    that.linkhistory='';
                                    that.$set(that,'productInfo',that.productInfo);
                                    layList.layer.close(res);
                                },function () {
                                    parent.layer.close(parent.layer.getFrameIndex(window.name));
                                })
                            })
                        },function (res){
                            layList.layer.close(index);
                            layList.msg(res.msg);
                        });
                    });
                },
                setArraySelect:function (Arraylist) {
                    var list=[];
                    for(var i=0,len=Arraylist.length;i<len;i++) {
                        if(Arraylist[i].isSelect) list.push(Arraylist[i].pic);
                    }
                    return list;
                }
            },
            mounted:function () {
                var that=this;
                this.$nextTick(function () {
                    layList.form.render();
                    layList.select('cate_id',function (data) {
                        that.productInfo.cate_id=data.value;
                    });
                })

            }
        })
    })
</script>


</div>
</body>
</html>
