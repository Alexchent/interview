import time
import random
print (time.time())


# 序列

score = list(range(1,10,1))
for index,value in enumerate(score) :
    print(index,value)


tangshi = ['蜀道难','拿鱼上青天','哈哈']
print(tangshi)

# 列表中添加元素
tangshi.append('我是谁')
print(tangshi)

# 列表中批量添加元素
tangshi.extend(['来吧','小当家'])
print(tangshi)

# 列表中删除元素1
del tangshi[1]
print(tangshi)

# 列表中删除元素1
if tangshi.count('哈哈') >0 :
    tangshi.remove('哈哈')
print(tangshi)

# 列表推导式   生成10个在10至100之间的随机数
price = [random.randint(10,100) for i in range(10)]
print(price)

# 降序排序
price.sort(reverse=True)
print(price)

# 根据列表生成指定需求的列表   打五折的新价格目录
half_price= [x/2 for x in price]
print(half_price)

# 从列表中选择符合条件的元素组成新列表 五折后价格超过30的目录
can_on=[x/2 for x in price if x/2 > 30]
print(can_on)