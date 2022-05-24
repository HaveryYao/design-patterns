# 设计模式

## 创建型

- [简单工厂模式]()
- [工厂模式](DesignPatterns/Creational/Factory/README.md)
- [抽象工厂](DesignPatterns/Creational/AbstractFactory/README.md)
- [建造者模式](DesignPatterns/Creational/Builder/README.md)
- [单例模式](DesignPatterns/Creational/Singleton/README.md)
- [原型模式](DesignPatterns/Creational/Prototype/README.md)

## 结构型

- [适配器模型](DesignPatterns/Structural/Adapter/README.md)
- [桥接模式](DesignPatterns/Structural/Bridge/README.md)
- [享元模式](DesignPatterns/Structural/Flyweight/README.md)
- [组合模式](DesignPatterns/Structural/Composite/README.md)
- [装饰模式](DesignPatterns/Structural/Decorator/README.md)
- [代理模式](DesignPatterns/Structural/Proxy/README.md)
- [外观模式](DesignPatterns/Structural/Facade/README.md)

## 行为型

- [状态模型](DesignPatterns/Behavioral/State/README.md)
- [命令模式](DesignPatterns/Behavioral/Command/README.md)
- [迭代器模式](DesignPatterns/Behavioral/Iterator/README.md)
- [职责链模式](DesignPatterns/Behavioral/ChainOfResponsbility/README.md)
- [备忘录模式](DesignPatterns/Behavioral/Memento/README.md)
- [中介者模式](DesignPatterns/Behavioral/Mediator/README.md)
- [观察者模式](DesignPatterns/Behavioral/Observer/README.md)
- [策略模式](DesignPatterns/Behavioral/Strategy/README.md)
- [解释器模式](DesignPatterns/Behavioral/Interpreter/README.md)
- [访问者模式](DesignPatterns/Behavioral/Visitor/README.md)

## 设计模式六大原则

- 开闭原则

  开闭原则是指软件实应该可以扩展，而不可以修改。即对扩展开发对修改封闭。开闭原则是面向对象设计的核心所在。遵循这个原则可以带来面向对象技术所声称的巨大好处，也就是可扩展、可维护、可复用、灵活性好。开发人员应该对程序中频繁变化的那部分做
  出抽象，然而，对于应用程序中的每部分都刻意地进行抽象同样不是一个好主意。拒绝不成熟的抽象和抽象一样重要。


- 依赖倒置原则

    1. 高层模块不应该依赖底层模块。两个都应该依赖抽象。
    2. 抽象不应该依赖细节，细节应该依赖抽象


- 里氏替换原则

  一个软件实体如果使用的是一个父类的话，那么一定使用起子类，而且它察觉不出父类对象和子类对象的差别。也就是说在软件里面把父类都替换成子类，软件行为没有变化。
  > 即子类型必须能够替换掉他们的父类型


- 迪米特法则

  也叫做最小知识原则。如果两个类彼此不进行通信，那么这两个类就不应该发生直接的相互作用，如果其中一个类需要调用另一个类的某一个方法的话，可以通过第三者转发这个调用。
  > 在类的设计实践中要尽量的降低成员的访问权限。


- 单一职责

  单一职责是指就一个类而言，应该仅有一个引起它变化的原因。 如果一个类承担的职责过多，就等于把这些职责耦合在一起，一 个职责的变化可能会削弱或者抑制这个类完成其他职责的能力。 这种耦合会导致脆弱的设计，当发生变化时，设计会遭受意想不
  到的破坏。


- 接口隔离