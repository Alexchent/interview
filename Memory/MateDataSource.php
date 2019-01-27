<?php
/**
 * Created by PhpStorm.
 * User: hs
 * Date: 2015/7/13
 * Time: 16:37
 */

/**
 * Class MateDataSource
 *
 * 存放用于校准纯真ip的数据表
 *
 */
class MateDataSource
{
    public $arr = array(
        '长安区' => '1',
        '长安' => '1',
        '高邑县' => '2',
        '高邑' => '2',
        '藁城市' => '3',
        '藁城' => '3',
        '晋州市' => '4',
        '晋州' => '4',
        '井陉矿区' => '5',
        '井陉县' => '6',
        '灵寿县' => '7',
        '灵寿' => '7',
        '鹿泉市' => '8',
        '鹿泉' => '8',
        '栾城县' => '9',
        '栾城' => '9',
        '平山县' => '10',
        '平山' => '10',
        '桥东区' => '11',
        '桥东' => '11',
        '桥西区' => '12',
        '桥西' => '12',
        '深泽县' => '13',
        '深泽' => '13',
        '无极县' => '14',
        '无极' => '14',
        '辛集市' => '15',
        '辛集' => '15',
        '新华区' => '16',
        '新华' => '16',
        '新乐市' => '新乐市xx',
        '新乐' => '新乐市ss',
        '行唐县' => '18',
        '行唐' => '18',
        '裕华区' => '19',
        '裕华' => '19',
        '元氏县' => '20',
        '元氏' => '20',
        '赞皇县' => '21',
        '赞皇' => '21',
        '赵县' => '22',
        '正定县' => '23',
        '正定' => '23',

        '石家庄市' => '23',//
        '石家庄' => '23',//
        '秦皇岛市' => '24',
        '秦皇岛' => '24',
        '唐山市' => '2',
        '唐山' => '2',
        '邯郸市' => '2',
        '邯郸' => '2',
        '邢台市' => '2',
        '邢台' => '2',
        '保定市' => '2',
        '保定' => '2',
        '张家口市' => '2',
        '张家口' => '2',
        '承德市' => '2',
        '承德' => '2',
        '沧州市' => '2',
        '沧州' => '2',
        '廊坊市' => '2',
        '廊坊' => '2',
        '衡水市' => '2',
        '衡水' => '2',
        '河北省' => '23',//
        '河北' => '23',//

        '古交市' => '24',
        '古交' => '24',
        '尖草坪区' => '2',
        '尖草坪' => '2',
        '晋源区' => '2',
        '晋源' => '2',
        '娄烦县' => '2',
        '娄烦' => '2',
        '清徐县' => '2',
        '清徐' => '2',
        '万柏林区' => '2',
        '万柏林' => '2',
        '小店区' => '2',
        '小店' => '2',
        '杏花岭区' => '2',
        '杏花岭' => '2',
        '阳曲县' => '2',
        '阳曲' => '2',
        '迎泽区' => '2',
        '迎泽' => '2',

        '太原市' => '24',
        '太原' => '24',
        '山西省大同市' => '24',
        '山西省大同' => '24',
        '山西大同市' => '24',
        '山西大同' => '24',
        '大同市' => '24',
        '大同' => '24',       //台北大同区
        '阳泉市' => '2',
        '阳泉' => '2',
        '长治市' => '2',
        '长治' => '2',
        '晋城市' => '2',
        '晋城' => '2',
        '朔州市' => '2',
        '朔州' => '2',
        '晋中市' => '2',
        '晋中' => '2',
        '运城市' => '2',
        '运城' => '2',
        '忻州市' => '2',
        '忻州' => '2',
        '临汾市' => '2',
        '临汾' => '2',
        '吕梁市' => '2',
        '吕梁' => '2',
        '山西省' => '2',//
        '山西' => '2',

        '广州市白云' => '24',
        '广州白云区' => '24',
        '广州白云' => '24',
        '从化市' => '2',
        '从化' => '2',
        '番禺区' => '2',
        '番禺' => '2',
        '海珠区' => '2',
        '海珠' => '2',
        '花都区' => '2',
        '花都' => '2',
        '黄埔区' => '2',
        '黄埔' => '2',
        '荔湾区' => '2',
        '荔湾' => '2',
        '萝岗区' => '2',
        '萝岗' => '2',
        '南沙区' => '2',
        '南沙' => '2',
        '天河区' => '2',
        '天河' => '2',
        '越秀区' => '2',
        '越秀' => '2',
        '增城市' => '2',
        '增城' => '2',
        '广州市' => '中国广东省广州市1',
        '广州' => '中国广东省广州市2',
        '韶关市' => '24',
        '韶关' => '24',
        '深圳市' => '2',
        '深圳' => '2',
        '珠海市' => '2',
        '珠海' => '2',
        '汕头市' => '2',
        '汕头' => '2',
        '佛山市' => '2',
        '佛山' => '2',
        '江门市' => '2',
        '江门' => '2',
        '湛江市' => '2',
        '湛江' => '2',
        '茂名市' => '2',
        '茂名' => '2',
        '肇庆市' => '2',
        '肇庆' => '2',
        '惠州市' => '2',
        '惠州' => '2',
        '梅州市' => '2',
        '梅州' => '2',
        '汕尾市' => '2',
        '汕尾' => '2',
        '河源市' => '2',
        '河源' => '2',
        '阳江市' => '2',
        '阳江' => '2',
        '清远市' => '2',
        '清远' => '2',
        '东莞市' => '2',
        '东莞' => '2',
        '广东省中山市' => '2',
        '广东省中山' => '2',
        '广东中山市' => '2',
        '广东中山' => '2',
        '中山市' => '2',       //台北中山区
        '潮州市' => '2',
        '潮州' => '2',
        '揭阳市' => '2',
        '揭阳' => '2',
        '云浮市' => '2',
        '云浮' => '2',
        '广东省' => '2',//
        '广东' => '2',//

        '白下区' => '24',
        '白下' => '24',
        '高淳县' => '2',
        '高淳' => '2',
        '鼓楼区' => '2',
        '鼓楼' => '2',
        '建邺区' => '2',
        '建邺' => '2',
        '江宁区' => '2',
        '江宁' => '2',
        '溧水县' => '2',
        '溧水' => '2',
        '六合区' => '2',
        '六合' => '2',
        '浦口区' => '2',
        '浦口' => '2',
        '栖霞区' => '2',
        '栖霞' => '2',
        '秦淮区' => '2',
        '秦淮' => '2',
        '下关区' => '2',
        '下关' => '2',
        '玄武区' => '2',
        '玄武' => '2',
        '雨花台区' => '2',
        '雨花台' => '2',
        '南京市' => '2',//
        '南京' => '2',//
        '无锡市' => '24',
        '无锡' => '24',
        '徐州市' => '2',
        '徐州' => '2',
        '常州市' => '2',
        '常州' => '2',
        '苏州市' => '2',
        '苏州' => '2',
        '南通市' => '2',
        '南通' => '2',
        '连云港市' => '2',
        '连云港' => '2',
        '淮安市' => '2',
        '淮安' => '2',
        '盐城市' => '2',
        '盐城' => '2',
        '扬州市' => '2',
        '扬州' => '2',
        '镇江市' => '2',
        '镇江' => '2',
        '泰州市' => '2',
        '泰州' => '2',
        '宿迁市' => '2',
        '宿迁' => '2',
        '江苏省' => '2',//
        '江苏' => '2',

        '滨江区' => '24',
        '滨江' => '24',
        '淳安县' => '2',
        '淳安' => '2',
        '富阳市' => '2',
        '富阳' => '2',
        '拱墅区' => '2',
        '拱墅' => '2',
        '建德市' => '2',
        '建德' => '2',
        '江干区' => '2',
        '江干' => '2',
        '临安市' => '2',
        '临安' => '2',
        '上城区' => '2',
        '上城' => '2',
        '桐庐县' => '2',
        '桐庐' => '2',
        '西湖区' => '2',
        '西湖' => '2',
        '下城区' => '2',
        '下城' => '2',
        '萧山区' => '2',
        '萧山' => '2',
        '余杭区' => '2',
        '余杭' => '2',
        '杭州市' => '24',//
        '杭州' => '24',
        '宁波市' => '24',
        '宁波' => '24',
        '温州市' => '2',
        '温州' => '2',
        '嘉兴市' => '2',
        '嘉兴' => '2',
        '湖州市' => '2',
        '湖州' => '2',
        '绍兴市' => '2',
        '绍兴' => '2',
        '金华市' => '2',
        '金华' => '2',
        '衢州市' => '2',
        '衢州' => '2',
        '舟山市' => '2',
        '舟山' => '2',
        '台州市' => '2',
        '台州' => '2',
        '丽水市' => '2',
        '丽水' => '2',
        '浙江省' => '2',//
        '浙江' => '2',

        '长清区' => '24',
        '长清' => '24',
        '槐荫区' => '2',
        '槐荫' => '2',
        '济阳县' => '2',
        '济阳' => '2',
        '历城区' => '2',
        '历城' => '2',
        '历下区' => '2',
        '历下' => '2',
        '平阴县' => '2',
        '平阴' => '2',
        '商河县' => '2',
        '商河' => '2',
        '市中区' => '2',
        '市中' => '2',
        '天桥区' => '2',
        '天桥' => '2',
        '章丘市' => '2',
        '章丘' => '2',
        '青岛市' => '24',
        '青岛' => '24',
        '淄博市' => '2',
        '淄博' => '2',
        '枣庄市' => '2',
        '枣庄' => '2',
        '东营市' => '2',
        '东营' => '2',
        '烟台市' => '2',
        '烟台' => '2',
        '潍坊市' => '2',
        '潍坊' => '2',
        '济宁市' => '2',
        '济宁' => '2',
        '泰安市' => '2',
        '泰安' => '2',
        '威海市' => '2',
        '威海' => '2',
        '日照市' => '2',
        '日照' => '2',
        '莱芜市' => '24',
        '莱芜' => '24',
        '临沂市' => '2',
        '临沂' => '2',
        '德州市' => '2',
        '德州' => '2',
        '聊城市' => '2',
        '聊城' => '2',
        '滨州市' => '2',
        '滨州' => '2',
        '菏泽市' => '2',
        '菏泽' => '2',
        '山东省' => '2',//
        '山东' => '2',

        '登封市' => '24',
        '登封' => '24',
        '二七区' => '2',
        '二七' => '2',
        '巩义市' => '2',
        '巩义' => '2',
        '管城回族区' => '2',
        '管城' => '2',
        '惠济区' => '2',
        '惠济' => '2',
        '金水区' => '2',
        '金水' => '2',
        '上街区' => '2',
        '上街' => '2',
        '新密市' => '2',
        '新密' => '2',
        '新郑市' => '2',
        '新郑' => '2',
        '荥阳市' => '2',
        '荥阳' => '2',
        '中牟县' => '24',
        '中牟' => '24',
        '中原区' => '2',
        '中原' => '2',
        '开封市' => '2',//////
        '开封' => '2',
        '洛阳市' => '2',
        '洛阳' => '2',
        '平顶山市' => '2',
        '平顶山' => '2',
        '安阳市' => '2',
        '安阳' => '2',
        '鹤壁市' => '24',
        '鹤壁' => '24',
        '新乡市' => '2',
        '新乡' => '2',
        '焦作市' => '2',
        '焦作' => '2',
        '濮阳市' => '2',
        '濮阳' => '2',
        '许昌市' => '2',
        '许昌' => '2',
        '漯河市' => '2',
        '漯河' => '2',
        '三门峡市' => '2',
        '三门峡' => '2',
        '南阳市' => '2',
        '南阳' => '2',
        '商丘市' => '2',
        '商丘' => '2',
        '信阳市' => '2',
        '信阳' => '2',
        '周口市' => '24',
        '周口' => '24',
        '驻马店市' => '2',
        '驻马店' => '2',
        '河南省' => '2',//
        '河南' => '2',

        '成华区' => '2',
        '成华' => '2',
        '崇州市' => '2',
        '崇州' => '2',
        '大邑县' => '2',
        '大邑' => '2',
        '都江堰市' => '2',
        '都江堰' => '2',
        '金牛区' => '24',
        '金牛' => '24',
        '金堂县' => '2',
        '锦江区' => '2',
        '锦江' => '2',
        '龙泉驿区' => '2',
        '龙泉驿' => '2',
        '彭州市' => '2',
        '彭州' => '2',
        '郫县' => '2',
        '蒲江县' => '2',
        '蒲江' => '2',
        '青白江区' => '2',
        '青白江' => '2',
        '青羊区' => '2',
        '青羊' => '2',
        '邛崃市' => '2',
        '邛崃' => '2',
        '双流县' => '24',
        '双流' => '24',
        '温江区' => '2',
        '温江' => '2',
        '武侯区' => '2',
        '武侯' => '2',
        '新都区' => '2',
        '新都' => '2',
        '新津县' => '2',
        '新津' => '2',
        '成都市' => '2',//
        '成都' => '2',//
        '自贡市' => '2',
        '自贡' => '2',
        '攀枝花市' => '2',
        '攀枝花' => '2',
        '泸州市' => '2',
        '泸州' => '2',
        '德阳市' => '2',
        '德阳' => '2',
        '绵阳市' => '24',
        '绵阳' => '24',
        '广元市' => '2',
        '广元' => '2',
        '遂宁市' => '2',
        '遂宁' => '2',
        '内江市' => '2',
        '内江' => '2',
        '乐山市' => '2',
        '乐山' => '2',
        '南充市' => '2',
        '南充' => '2',
        '眉山市' => '2',
        '眉山' => '2',
        '宜宾市' => '2',
        '宜宾' => '2',
        '广安市' => '2',
        '广安' => '2',
        '达州市' => '2',
        '达州' => '2',
        '雅安市' => '24',
        '雅安' => '24',
        '巴中市' => '2',
        '巴中' => '2',
        '资阳市' => '2',
        '资阳' => '2',
        '阿坝藏族羌族自治州' => '2',
        '阿坝' => '2',
        '甘孜藏族自治州' => '2',
        '甘孜' => '2',
        '凉山彝族自治州' => '2',
        '凉山' => '2',
        '四川省' => '2', //
        '四川' => '2',

        '长沙县' => '2',
        '芙蓉区' => '2',
        '芙蓉' => '2',
        '开福区' => '2',
        '开福' => '2',
        '浏阳市' => '2',
        '浏阳' => '2',
        '宁乡县' => '24',
        '宁乡' => '24',
        '天心区' => '2',
        '天心' => '2',
        '望城县' => '2',
        '望城' => '2',
        '雨花区' => '2',
        '雨花' => '2',
        '岳麓区' => '2',
        '岳麓' => '2',
        '长沙市' => '2',//
        '长沙' => '2',//
        '株洲市' => '2',
        '株洲' => '2',
        '湘潭市' => '2',
        '湘潭' => '2',
        '衡阳市' => '2',
        '衡阳' => '2',
        '邵阳市' => '2',
        '邵阳' => '2',
        '岳阳市' => '2',
        '岳阳' => '2',
        '常德市' => '24',
        '常德' => '24',
        '张家界市' => '2',
        '张家界' => '2',
        '益阳市' => '2',
        '益阳' => '2',
        '郴州市' => '2',
        '郴州' => '2',
        '永州市' => '2',
        '永州' => '2',
        '怀化市' => '2',
        '怀化' => '2',
        '娄底市' => '2',
        '娄底' => '2',
        '湘西土家族苗族自治州' => '2',
        '湘西' => '2',
        '湖南省' => '2',
        '湖南' => '2',

        '安义县' => '2',
        '安义' => '2',
        '东湖区' => '2',
        '东湖' => '2',
        '进贤县' => '2',
        '进贤' => '2',
        '南昌县' => '2',
        '青山湖区' => '2',
        '青山湖' => '2',
        '青云谱区' => '24',
        '青云谱' => '24',
        '湾里区' => '2',
        '湾里' => '2',
        '新建县' => '2',
        '新建' => '2',
        '南昌市' => '2',//
        '南昌' => '2',//
        '景德镇市' => '2',
        '景德镇' => '2',
        '萍乡市' => '2',
        '萍乡' => '2',
        '九江市' => '2',
        '九江' => '2',
        '新余市' => '2',
        '新余' => '2',
        '鹰潭市' => '2',
        '鹰潭' => '2',
        '赣州市' => '2',
        '赣州' => '2',
        '吉安市' => '2',
        '吉安' => '2',
        '宜春市' => '2',
        '宜春' => '2',
        '抚州市' => '2',
        '抚州' => '2',
        '上饶市' => '2',
        '上饶' => '2',
        '江西省' => '2',
        '江西' => '2',

        '蔡甸区' => '2',
        '蔡甸' => '2',
        '硚口区' => '2',
        '硚口' => '2',
        '东西湖区' => '2',
        '东西湖' => '2',
        '汉南区' => '2',
        '汉南' => '2',
        '汉阳区' => '2',
        '汉阳' => '2',
        '洪山区' => '2',
        '洪山' => '2',
        '黄陂区' => '2',
        '黄陂' => '2',
        '江岸区' => '2',
        '江岸' => '2',
        '江汉区' => '2',
        '江汉' => '2',
        '江夏区' => '2',
        '江夏' => '2',
        '青山区' => '2',
        '青山' => '2',
        '新洲区' => '2',
        '新洲' => '2',
        '武昌区' => '2',
        '武昌' => '2',
        '武汉市' => '2',//
        '武汉' => '2',//
        '黄石市' => '2',
        '黄石' => '2',
        '十堰市' => '2',
        '十堰' => '2',
        '宜昌市' => '2',
        '宜昌' => '2',
        '襄樊市' => '2',
        '襄樊' => '2',
        '鄂州市' => '2',
        '鄂州' => '2',
        '荆门市' => '2',
        '荆门' => '2',
        '孝感市' => '2',
        '孝感' => '2',
        '荆州市' => '2',
        '荆州' => '2',
        '黄冈市' => '2',
        '黄冈' => '2',
        '咸宁市' => '2',
        '咸宁' => '2',
        '随州市' => '2',
        '随州' => '2',
        '恩施土家族苗族自治州' => '2',
        '恩施' => '2',
        '仙桃市' => '2',
        '仙桃' => '2',
        '潜江市' => '2',
        '潜江' => '2',
        '天门市' => '2',
        '天门' => '2',
        '神农架林区' => '2',
        '神农架' => '2',
        '湖北省' => '2',//
        '湖北' => '2',

        '大东区' => '2',
        '大东' => '2',
        '东陵区' => '2',
        '东陵' => '2',
        '法库县' => '2',
        '法库' => '2',
        '沈阳市和平区' => '2', //天津市和平区
        '沈阳市和平' => '2',
        '沈阳和平区' => '2',
        '沈阳和平' => '2',
        '和平' => '2',
        '皇姑区' => '2',
        '皇姑' => '2',
        '康平县' => '2',
        '康平' => '2',
        '辽中县' => '2',
        '辽中' => '2',
        '沈北新区' => '2',
        '沈河区' => '2',
        '沈河' => '2',
        '苏家屯区' => '2',
        '苏家屯' => '2',
        '铁西区' => '2',
        '铁西' => '2',
        '新民市' => '2',
        '新民' => '2',
        '于洪区' => '2',
        '于洪' => '2',
        '沈阳市' => '2',//
        '沈阳' => '2',
        '大连市' => '2',
        '大连' => '2',
        '鞍山市' => '2',
        '鞍山' => '2',
        '抚顺市' => '2',
        '抚顺' => '2',
        '本溪市' => '2',
        '本溪' => '2',
        '丹东市' => '2',
        '丹东' => '2',
        '锦州市' => '2',
        '锦州' => '2',
        '营口市' => '2',
        '营口' => '2',
        '阜新市' => '2',
        '阜新' => '2',
        '辽阳市' => '2',
        '辽阳' => '2',
        '盘锦市' => '2',
        '盘锦' => '2',
        '铁岭市' => '2',
        '铁岭' => '2',
        '辽宁省朝阳市' => '2',
        '辽宁朝阳市' => '2',
        '辽宁朝阳' => '2',
        '朝阳市' => '2',
        '朝阳' => '2',
        '葫芦岛市' => '2',
        '葫芦岛' => '2',
        '辽宁省' => '2',
        '辽宁' => '2',

        '阿城区' => '2',
        '阿城' => '2',
        '巴彦县' => '2',
        '巴彦' => '2',
        '宾县' => '2',
        '道里区' => '2',
        '道里' => '2',
        '道外区' => '2',
        '道外' => '2',
        '方正县' => '2',
        '方正' => '2',
        '呼兰区' => '2',
        '呼兰' => '2',
        '木兰县' => '2',
        '木兰' => '2',
        '南岗区' => '2',
        '南岗' => '2',
        '平房区' => '2',
        '平房' => '2',
        '尚志市' => '2',
        '尚志' => '2',
        '双城市' => '2',
        '双城' => '2',
        '松北区' => '2',
        '松北' => '2',
        '通河县' => '2',
        '通河' => '2',
        '五常市' => '2',
        '五常' => '2',
        '香坊区' => '2',
        '香坊' => '2',
        '延寿县' => '2',
        '延寿' => '2',
        '依兰县' => '2',
        '依兰' => '2',
        '哈尔滨市' => '2',
        '哈尔滨' => '2',
        '齐齐哈尔市' => '2',
        '齐齐哈尔' => '2',
        '鸡西市' => '2',
        '鸡西' => '2',
        '鹤岗市' => '2',
        '鹤岗' => '2',
        '双鸭山市' => '2',
        '双鸭山' => '2',
        '大庆市' => '2',
        '大庆' => '2',
        '伊春市' => '2',
        '伊春' => '2',
        '佳木斯市' => '2',
        '佳木斯' => '2',
        '七台河市' => '2',
        '七台河' => '2',
        '牡丹江市' => '2',
        '牡丹江' => '2',
        '黑河市' => '2',
        '黑河' => '2',
        '绥化市' => '2',
        '绥化' => '2',
        '大兴安岭地区' => '2',
        '大兴安岭' => '2',
        '黑龙江省' => '2',
        '黑龙江' => '2',

        '仓山区' => '2',
        '仓山' => '2',
        '长乐市' => '2',
        '长乐' => '2',
        '福清市' => '2',
        '福清' => '2',
        '晋安区' => '2',
        '晋安' => '2',
        '连江县' => '2',
        '连江' => '2',
        '罗源县' => '2',
        '罗源' => '2',
        '马尾区' => '2',
        '马尾' => '2',
        '闽清县' => '2',
        '闽清' => '2',
        '平潭县' => '2',
        '平潭' => '2',
        '台江区' => '2',
        '台江' => '2',
        '永泰县' => '2',
        '永泰' => '2',
        '福州市' => '2',//
        '福州' => '2',
        '厦门市' => '2',
        '厦门' => '2',
        '莆田市' => '2',
        '莆田' => '2',
        '三明市' => '2',
        '三明' => '2',
        '泉州市' => '2',
        '泉州' => '2',
        '漳州市' => '2',
        '漳州' => '2',
        '南平市' => '2',
        '南平' => '2',
        '龙岩市' => '2',
        '龙岩' => '2',
        '宁德市' => '2',
        '宁德' => '2',
        '福建省' => '2',
        '福建' => '2',

        '碑林区' => '2',
        '碑林' => '2',
        '高陵县' => '2',
        '高陵' => '2',
        '户县' => '2',
        '蓝田县' => '2',
        '蓝田' => '2',
        '莲湖区' => '2',
        '莲湖' => '2',
        '临潼区' => '2',
        '临潼' => '2',
        '灞桥区' => '2',
        '灞桥' => '2',
        '未央区' => '2',
        '未央' => '2',
        '西安新城区' => '2', //呼和浩特市新城区
        '西安新城' => '2',
        '阎良区' => '2',
        '阎良' => '2',
        '雁塔区' => '2',
        '雁塔' => '2',
        '周至县' => '2',
        '周至' => '2',
        '西安' => '2',//
        '铜川市' => '2',
        '铜川' => '2',
        '宝鸡市' => '2',
        '宝鸡' => '2',
        '咸阳市' => '2',
        '咸阳' => '2',
        '渭南市' => '2',
        '渭南' => '2',
        '延安市' => '2',
        '延安' => '2',
        '汉中市' => '2',
        '汉中' => '2',
        '榆林市' => '2',
        '榆林' => '2',
        '安康市' => '2',
        '安康' => '2',
        '商洛市' => '2',
        '商洛' => '2',

        '包河区' => '2',
        '包河' => '2',
        '长丰县' => '2',
        '长丰' => '2',
        '巢湖市' => '2',
        '巢湖' => '2',
        '肥东县' => '2',
        '肥东' => '2',
        '肥西县' => '2',
        '肥西' => '2',
        '庐江县' => '2',
        '庐江' => '2',
        '庐阳区' => '2',
        '庐阳' => '2',
        '蜀山区' => '2',
        '蜀山' => '2',
        '瑶海区' => '2',
        '瑶海' => '2',

        '芜湖市' => '2',
        '芜湖' => '2',
        '蚌埠市' => '2',
        '蚌埠' => '2',
        '淮南市' => '2',
        '淮南' => '2',
        '马鞍山市' => '2',
        '马鞍山' => '2',
        '淮北市' => '2',
        '淮北' => '2',
        '铜陵市' => '2',
        '铜陵' => '2',
        '安庆市' => '2',
        '安庆' => '2',
        '黄山市' => '2',
        '黄山' => '2',
        '滁州市' => '2',
        '滁州' => '2',
        '阜阳市' => '2',
        '阜阳' => '2',
        '宿州市' => '2',
        '宿州' => '2',
        '六安市' => '2',
        '六安' => '2',
        '亳州市' => '2',
        '亳州' => '2',
        '池州市' => '2',
        '池州' => '2',
        '宣城市' => '2',
        '宣城' => '2',

        '吉林省朝阳区' => '2',
        '吉林朝阳区' => '2',
        '吉林朝阳' => '2',
        '长春市朝阳区' => '2',
        '长春朝阳区' => '2',
        '长春朝阳' => '2',
        '德惠市' => '2',
        '德惠' => '2',
        '二道区' => '2',
        '二道' => '2',
        '九台市' => '2',
        '九台' => '2',
        '宽城区' => '2',
        '宽城' => '2',
        '绿园区' => '2',
        '绿园' => '2',
        '南关区' => '2',
        '南关' => '2',
        '农安县' => '2',
        '农安' => '2',
        '双阳区' => '2',
        '双阳' => '2',
        '榆树市' => '2',
        '榆树' => '2',

        '吉林市' => '2',
        '吉林' => '2',
        '四平市' => '2',
        '四平' => '2',
        '辽源市' => '2',
        '辽源' => '2',
        '通化市' => '2',
        '通化' => '2',
        '白山市' => '2',
        '白山' => '2',
        '松原市' => '2',
        '松原' => '2',
        '白城市' => '2',
        '白城' => '2',
        '延边朝鲜族自治州' => '2',
        '延边' => '2',

        '昆明市安宁市' => '2',
        '昆明市安宁' => '2',
        '昆明安宁市' => '2',
        '昆明安宁' => '2',
        '呈贡县' => '2',
        '呈贡' => '2',
        '东川区' => '2',
        '东川' => '2',
        '富民县' => '2',
        '富民' => '2',
        '官渡区' => '2',
        '官渡' => '2',
        '晋宁县' => '2',
        '晋宁' => '2',
        '禄劝县' => '2',
        '禄劝' => '2',
        '盘龙区' => '2',
        '盘龙' => '2',
        '石林彝族自治县' => '2',
        '石林' => '2',
        '嵩明县' => '2',
        '嵩明' => '2',
        '五华区' => '2',
        '五华' => '2',
        '西山区' => '2',
        '西山' => '2',
        '寻甸县' => '2',
        '寻甸' => '2',
        '宜良县' => '2',
        '宜良' => '2',

        '昆明市' => '2',
        '昆明' => '2',
        '曲靖市' => '2',
        '曲靖' => '2',
        '玉溪市' => '2',
        '玉溪' => '2',
        '保山市' => '2',
        '保山' => '2',
        '昭通市' => '2',
        '昭通' => '2',
        '丽江市' => '2',
        '丽江' => '2',
        '思茅市' => '2',
        '思茅' => '2',
        '临沧市' => '2',
        '临沧' => '2',
        '楚雄彝族自治州' => '2',
        '楚雄' => '2',
        '红河哈尼族彝族自治州' => '2',
        '红河' => '2',
        '文山壮族苗族自治州' => '2',
        '文山' => '2',        //台北市文山区
        '西双版纳傣族自治州' => '2',
        '西双版纳' => '2',
        '大理白族自治州' => '2',
        '大理' => '2',
        '德宏傣族景颇族自治州' => '2',
        '德宏' => '2',
        '怒江傈僳族自治州' => '2',
        '怒江' => '2',
        '迪庆藏族自治州' => '2',
        '迪庆' => '2',

        '贵阳市白云区' => '2',
        '贵阳市白云' => '2',
        '贵阳白云区' => '2',
        '贵阳白云' => '2',
        '花溪区' => '2',
        '花溪' => '2',
        '开阳县' => '2',
        '开阳' => '2',
        '南明区' => '2',
        '南明' => '2',
        '清镇市' => '2',
        '清镇' => '2',
        '乌当区' => '2',
        '乌当' => '2',
        '息烽县' => '2',
        '息烽' => '2',
        '小河区' => '2',
        '小河' => '2',
        '修文县' => '2',
        '修文' => '2',
        '云岩区' => '2',
        '云岩' => '2',
        '贵阳市' => '2',
        '贵阳' => '2',
        '六盘水市' => '2',
        '六盘水' => '2',
        '遵义市' => '2',
        '遵义' => '2',
        '安顺市' => '2',
        '安顺' => '2',
        '铜仁地区' => '2',
        '铜仁' => '2',
        '黔西南布依族苗族自治州' => '2',
        '黔西' => '2',
        '毕节地区' => '2',
        '毕节' => '2',
        '黔东南苗族侗族自治州' => '2',
        '黔东' => '2',
        '黔南布依族苗族自治州' => '2',
        '黔南' => '2',

        '兰州市安宁区' => '2',
        '兰州安宁区' => '2',
        '安宁区' => '2',
        '安宁' => '2',        //安宁市
        '兰州市城关区' => '2', //拉萨市城关区
        '兰州市城关' => '2',
        '兰州城关区' => '2',
        '兰州城关' => '2',
        '皋兰县' => '2',
        '皋兰' => '2',
        '红古区' => '2',
        '红古' => '2',
        '七里河区' => '2',
        '七里河' => '2',
        '西固区' => '2',
        '西固' => '2',
        '永登县' => '2',
        '永登' => '2',
        '榆中县' => '2',
        '榆中' => '2',
        '兰州市' => '2',//
        '兰州' => '2',
        '嘉峪关市' => '2',
        '嘉峪关' => '2',
        '金昌市' => '2',
        '金昌' => '2',
        '白银市' => '2',
        '白银' => '2',
        '天水市' => '2',
        '天水' => '2',
        '武威市' => '2',
        '武威' => '2',
        '张掖市' => '2',
        '张掖' => '2',
        '平凉市' => '2',
        '平凉' => '2',
        '酒泉市' => '2',
        '酒泉' => '2',
        '庆阳市' => '2',
        '庆阳' => '2',
        '定西市' => '2',
        '定西' => '2',
        '陇南市' => '2',
        '陇南' => '2',
        '临夏回族自治州' => '2',
        '临夏' => '2',
        '甘南藏族自治州' => '2',
        '甘南' => '2',

        '龙华区' => '2',
        '龙华' => '2',
        '美兰区' => '2',
        '美兰' => '2',
        '琼山区' => '2',
        '琼山' => '2',
        '秀英区' => '2',
        '秀英' => '2',

        '三亚市' => '2',
        '三亚' => '2',
        '三沙市' => '2',
        '三沙' => '2',
        '五指山市' => '2',
        '五指山' => '2',
        '琼海市' => '2',
        '琼海' => '2',
        '儋州市' => '2',
        '儋州' => '2',
        '文昌市' => '2',
        '文昌' => '2',
        '万宁市' => '2',
        '万宁' => '2',
        '东方市' => '2',
        '东方' => '2',

        '城北区' => '2',
        '城北' => '2',
        '城东区' => '2',
        '城东' => '2',
        '城西区' => '2',
        '城西' => '2',
        '城中区' => '2',
        '城中' => '2',
        '大通县' => '2',
        '大通' => '2',
        '湟源县' => '2',
        '湟源' => '2',
        '湟中县' => '2',
        '湟中' => '2',

        '海东地区' => '2',
        '海东' => '2',
        '海北藏族自治州' => '2',
        '海北' => '2',
        '黄南藏族自治州' => '2',
        '黄南' => '2',
        '海南藏族自治州' => '2',
        '海南' => '2',
        '果洛藏族自治州' => '2',
        '果洛' => '2',
        '玉树藏族自治州' => '2',
        '玉树' => '2',
        '海西蒙古族藏族自治州' => '2',
        '海西' => '2',

        '内湖区' => '2',
        '内湖' => '2',
        '台北市大同区' => '2',
        '台北市大同' => '2',
        '台北大同区' => '2',
        '台北大同' => '2',
        '大同区' => '2',         //大同市
        '万华区' => '2',
        '万华' => '2',
        '中正区' => '2',
        '中正' => '2',
        '台北市文山区' => '2',
        '台北市文山' => '2',
        '台北文山区' => '2',
        '台北文山' => '2',
        '文山区' => '2',       //文山壮族苗族自治州
        '台北市中山区' => '2',
        '台北市中山' => '2',
        '台北中山区' => '2',
        '台北中山' => '2',
        '中山区' => '2',           //中山市
        '信义区' => '2',
        '信义' => '2',
        '北投区' => '2',
        '北投' => '2',
        '南港区' => '2',
        '南港' => '2',
        '士林区' => '2',
        '士林' => '2',

        '台北市' => '2',
        '台北' => '2',
        '台中市' => '2',
        '台中' => '2',
        '基隆市' => '2',
        '基隆' => '2',
        '台南市' => '2',
        '台南' => '2',
        '嘉义市' => '2',
        '嘉义' => '2',
        '新竹市' => '2',
        '新竹' => '2',
        '高雄市' => '2',
        '高雄' => '2',

        //广西壮族自治区
        //南宁市
        '宾阳县' => '2',
        '宾阳' => '2',
        '横县' => '2',
        '江南区' => '2',
        '江南' => '2',
        '良庆区' => '2',
        '良庆' => '2',
        '隆安县' => '2',
        '隆安' => '2',
        '马山县' => '2',
        '马山' => '2',
        '青秀区' => '2',
        '青秀' => '2',
        '上林县' => '2',
        '上林' => '2',
        '武鸣县' => '2',
        '武鸣' => '2',
        '西乡塘区' => '2',
        '西乡塘' => '2',
        '兴宁区' => '2',
        '兴宁' => '2',
        '邕宁区' => '2',
        '邕宁' => '2',

        '柳州市' => '2',
        '柳州' => '2',
        '桂林市' => '2',
        '桂林' => '2',
        '梧州市' => '2',
        '梧州' => '2',
        '北海市' => '2',
        '北海' => '2',
        '防城港市' => '2',
        '防城港' => '2',
        '钦州市' => '2',
        '钦州' => '2',
        '贵港市' => '2',
        '贵港' => '2',
        '玉林市' => '2',
        '玉林' => '2',
        '百色市' => '2',
        '百色' => '2',
        '贺州市' => '2',
        '贺州' => '2',
        '河池市' => '2',
        '河池' => '2',
        '来宾市' => '2',
        '来宾' => '2',
        '崇左市' => '2',
        '崇左' => '2',

        '贺兰县' => '2',
        '贺兰' => '2',
        '金凤区' => '2',
        '金凤' => '2',
        '灵武市' => '2',
        '灵武' => '2',
        '西夏区' => '2',
        '西夏' => '2',
        '兴庆区' => '2',
        '兴庆' => '2',
        '永宁县' => '2',
        '永宁' => '2',

        '石嘴山市' => '2',
        '石嘴山' => '2',
        '吴忠市' => '2',
        '吴忠' => '2',
        '固原市' => '2',
        '固原' => '2',
        '中卫市' => '2',
        '中卫' => '2',

        '拉萨市城关区' => '2',    //兰州市城关区
        '拉萨市城关' => '2',
        '拉萨城关区' => '2',
        '拉萨城关' => '2',
        '达孜县' => '2',
        '达孜' => '2',
        '当雄县' => '2',
        '当雄' => '2',
        '堆龙德庆县' => '2',
        '堆龙德庆' => '2',
        '堆龙' => '2',
        '林周县' => '2',
        '林周' => '2',
        '墨竹工卡县' => '2',
        '墨竹工卡' => '2',
        '墨竹' => '2',
        '尼木县' => '2',
        '尼木' => '2',
        '曲水县' => '2',
        '曲水' => '2',
        '拉萨市' => '2',//
        '拉萨' => '2',//
        '昌都地区' => '2',
        '昌都' => '2',
        '山南地区' => '2',
        '山南' => '2',
        '日喀则地区' => '2',
        '日喀则' => '2',
        '那曲地区' => '2',
        '那曲' => '2',
        '阿里地区' => '2',
        '阿里' => '2',
        '林芝地区' => '2',
        '林芝' => '2',

        '达坂城区' => '2',
        '达坂' => '2',
        '米东区' => '2',
        '米东' => '2',
        '沙依巴克区' => '2',
        '沙依巴克' => '2',
        '水磨沟区' => '2',
        '水磨沟' => '2',
        '天山区' => '2',
        '天山' => '2',
        '头屯河区' => '2',
        '头屯河' => '2',
        '乌鲁木齐县' => '2',
        '乌鲁木齐' => '2',
        '新市区' => '2',
        '新市' => '2',

        '克拉玛依市' => '2',
        '克拉玛依' => '2',
        '吐鲁番地区' => '2',
        '吐鲁番' => '2',
        '哈密地区' => '2',
        '哈密' => '2',
        '昌吉回族自治州' => '2',
        '昌吉' => '2',
        '博尔塔拉蒙古自治州' => '2',
        '博尔塔拉' => '2',
        '巴音郭楞蒙古自治州' => '2',
        '巴音郭楞' => '2',
        '阿克苏地区' => '2',
        '阿克苏' => '2',
        '克孜勒苏柯尔克孜自治州' => '2',
        '克孜勒苏柯尔克孜' => '2',
        '喀什地区' => '2',
        '喀什' => '2',
        '和田地区' => '2',
        '和田' => '2',
        '伊犁哈萨克自治州' => '2',
        '伊犁' => '2',
        '塔城地区' => '2',
        '塔城' => '2',
        '阿勒泰地区' => '2',
        '阿勒泰' => '2',
        '石河子市' => '2',
        '石河子' => '2',
        '阿拉尔市' => '2',
        '阿拉尔' => '2',
        '图木舒克市' => '2',
        '图木舒克' => '2',
        '五家渠市' => '2',
        '五家渠' => '2',

        '和林格尔县' => '2',
        '和林格尔' => '2',
        '回民区' => '2',
        '回民' => '2',
        '清水河县' => '2',
        '清水河' => '2',
        '赛罕区' => '2',
        '赛罕' => '2',
        '土默特左旗' => '2',
        '土默特' => '2',
        '托克托县' => '2',
        '托克托' => '2',
        '武川县' => '2',
        '武川' => '2',
        '呼和浩特市新城区' => '2',//西安新城区
        '呼和浩特市新城' => '2',
        '呼和浩特新城区' => '2',
        '呼和浩特新城' => '2',
        '呼和浩特市' => '2',//
        '呼和浩特' => '2',//
        '包头市' => '2',
        '包头' => '2',
        '乌海市' => '2',
        '乌海' => '2',
        '赤峰市' => '2',
        '赤峰' => '2',
        '通辽市' => '2',
        '通辽' => '2',
        '鄂尔多斯市' => '2',
        '鄂尔多斯' => '2',
        '呼伦贝尔市' => '2',
        '呼伦贝尔' => '2',
        '巴彦淖尔市' => '2',
        '巴彦淖尔' => '2',
        '乌兰察布市' => '2',
        '乌兰察布' => '2',
        '兴安盟' => '2',
        '锡林郭勒盟' => '2',
        '阿拉善盟' => '2',
        '内蒙古自治区' => '2',
        '内蒙古' => '2',

        //北京市
        '东城区' => '2',
        '东城' => '2',
        '西城区' => '2',
        '西城' => '2',
        '崇文区' => '2',
        '崇文' => '2',
        '宣武区' => '2',
        '宣武' => '2',
        '丰台区' => '2',
        '丰台' => '2',
        '石景山区' => '2',
        '石景山' => '2',
        '海淀区' => '2',
        '海淀' => '2',
        '门头沟区' => '2',
        '门头沟' => '2',
        '房山区' => '2',
        '房山' => '2',
        '通州区' => '2',
        '通州' => '2',
        '顺义区' => '2',
        '顺义' => '2',
        '昌平区' => '2',
        '昌平' => '2',
        '大兴区' => '2',
        '大兴' => '2',
        '怀柔区' => '2',
        '怀柔' => '2',
        '平谷区' => '2',
        '平谷' => '2',
        '密云县' => '2',
        '密云' => '2',
        '延庆县' => '2',
        '延庆' => '2',
        '北京市' => '中国北京市1',
        '北京' => '中国北京市2',

        '黄浦区' => '2',
        '黄浦' => '2',
        '徐汇区' => '2',
        '徐汇' => '2',
        '长宁区' => '2',
        '长宁' => '2',
        '静安区' => '2',
        '静安' => '2',
        '普陀区' => '2',
        '普陀' => '2',
        '闸北区' => '2',
        '闸北' => '2',
        '虹口区' => '2',
        '虹口' => '2',
        '杨浦区' => '2',
        '杨浦' => '2',
        '闵行区' => '2',
        '闵行' => '2',
        '宝山区' => '2',
        '宝山' => '2',
        '嘉定区' => '2',
        '嘉定' => '2',
        '浦东新区' => '2',
        '浦东' => '2',
        '金山区' => '2',
        '金山' => '2',
        '松江区' => '2',
        '松江' => '2',
        '青浦区' => '2',
        '青浦' => '2',
        '奉贤区' => '2',
        '奉贤' => '2',
        '崇明县' => '2',
        '崇明' => '2',
        '上海市' => '中国上海市',
        '上海' => '中国上海市',

        '万州区' => '2',
        '万州' => '2',
        '涪陵区' => '2',
        '涪陵' => '2',
        '渝中区' => '2',
        '渝中' => '2',
        '大渡口区' => '2',
        '大渡口' => '2',
        '江北区' => '2',
        '江北' => '2',
        '沙坪坝区' => '2',
        '沙坪坝' => '2',
        '九龙坡区' => '2',
        '九龙坡' => '2',
        '南岸区' => '2',
        '南岸' => '2',
        '北碚区' => '2',
        '北碚' => '2',
        '万盛区' => '2',
        '万盛' => '2',
        '双桥区' => '2',
        '双桥' => '2',
        '渝北区' => '2',
        '渝北' => '2',
        '巴南区' => '2',
        '巴南' => '2',
        '黔江区' => '2',
        '黔江' => '2',
        '长寿区' => '2',
        '长寿' => '2',
        '江津区' => '2',
        '江津' => '2',
        '合川区' => '2',
        '合川' => '2',
        '永川区' => '2',
        '永川' => '2',
        '南川区' => '2',
        '南川' => '2',
        '綦江县' => '2',
        '綦江' => '2',
        '潼南县' => '2',
        '潼南' => '2',
        '铜梁县' => '2',
        '铜梁' => '2',
        '大足县' => '2',
        '大足' => '2',
        '荣昌县' => '2',
        '荣昌' => '2',
        '璧山县' => '2',
        '璧山' => '2',
        '梁平县' => '2',
        '梁平' => '2',
        '城口县' => '2',
        '城口' => '2',
        '丰都县' => '2',
        '丰都' => '2',
        '垫江县' => '2',
        '垫江' => '2',
        '武隆县' => '2',
        '武隆' => '2',
        '忠县' => '2',
        '开县' => '2',
        '云阳县' => '2',
        '云阳' => '2',
        '奉节县' => '2',
        '奉节' => '2',
        '巫山县' => '2',
        '巫山' => '2',
        '巫溪县' => '2',
        '巫溪' => '2',
        '石柱土家族自治县' => '2',
        '石柱' => '2',
        '秀山土家族苗族自治县' => '2',
        '秀山' => '2',
        '酉阳土家族苗族自治县' => '2',
        '酉阳' => '2',
        '彭水苗族土家族自治县' => '2',
        '彭水' => '2',
        '重庆市' => '2',
        '重庆' => '2',

        //天津市
        '天津市和平区' => '2',//沈阳市和平区
        '天津市和平' => '2',
        '天津和平区' => '2',
        '天津和平' => '2',
        '河东区' => '2',
        '河东' => '2',
        '河西区' => '2',
        '河西' => '2',
        '南开区' => '2',
        '南开' => '2',
        '河北区' => '2',
        '红桥区' => '2',
        '红桥' => '2',
        '塘沽区' => '2',
        '塘沽' => '2',
        '汉沽区' => '2',
        '汉沽' => '2',
        '大港区' => '2',
        '大港' => '2',
        '东丽区' => '2',
        '东丽' => '2',
        '西青区' => '2',
        '西青' => '2',
        '津南区' => '2',
        '津南' => '2',
        '北辰区' => '2',
        '北辰' => '2',
        '武清区' => '2',
        '武清' => '2',
        '宝坻区' => '2',
        '宝坻' => '2',
        '宁河县' => '2',
        '宁河' => '2',
        '静海县' => '2',
        '静海' => '2',
        '蓟县' => '2',
        '天津市' => '2',
        '天津' => '2',

        '新界' => '2',
        '香港岛' => '2',
        '九龙' => '2',
        '香港特别行政区' => '2',
        '香港' => '2',

        '澳门市' => '2',
        '澳门' => '2',
        '凼仔岛' => '2',
        '澳门半岛' => '2',
        '海岛市' => '2',
        '路氹城' => '2',
        '路环岛' => '2',
        '澳门特别行政区' => '2',

    );

}
