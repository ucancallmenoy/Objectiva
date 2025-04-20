<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Quiz;

class QuizSeeder extends Seeder
{
    public function run(): void
    {
        Quiz::insert([
            [
                'category' => 'abstraction',
                'question' => "What is the primary goal of abstraction in programming?",
                'a' => "To write code faster",
                'b' => "To hide implementation details and show only essential functionality",
                'c' => "To make all code visible to the user",
                'd' => "To enhance the aesthetics of the code",
                'correct' => "b",
                'explanation' => "Abstraction simplifies complex systems by hiding implementation details and exposing only the necessary functionality. This makes it easier to work with objects and reduces dependencies on specific implementations.",
                'code' => null, 
            ],
            [
                'category' => 'abstraction',
                'question' => "Which of the following best describes high-level abstraction?",
                'a' => "Deals with the 'what' of the system, focusing on user interaction and system behavior",
                'b' => "Focuses on the 'how,' detailing specific implementations like code and algorithms",
                'c' => "Manages system components and their responsibilities",
                'd' => "Defines private attributes for a class",
                'correct' => "a",
                'explanation' => "High-level abstraction defines broad system behavior and user interaction without focusing on specific implementations. It is more about describing the system’s purpose rather than the inner workings.",
                'code' => null,
            ],
            [
                'category' => 'abstraction',
                'question' => "Which programming construct typically represents high-level abstraction?",
                'a' => "Interfaces",
                'b' => "Concrete classes",
                'c' => "Abstract methods only",
                'd' => "Algorithms",
                'correct' => "a",
                'explanation' => "Interfaces define what a class must do without specifying how. They provide a high level of abstraction by outlining behaviors without dictating implementation.",
                'code' => null,
            ],
            [
                'category' => 'abstraction',
                'question' => "What does mid-level abstraction typically involve?",
                'a' => "Interfaces that define what actions can be performed",
                'b' => "Concrete classes that provide full implementations",
                'c' => "Abstract classes with a mix of abstract and concrete methods",
                'd' => "High-level user interfaces",
                'correct' => "c",
                'explanation' => "Mid-level abstraction is often represented by abstract classes, which contain both abstract methods (unimplemented) and concrete methods (implemented). This balances flexibility with some predefined behavior.",
                'code' => null,
            ],
            [
                'category' => 'abstraction',
                'question' => "Which example demonstrates low-level abstraction?",
                'a' => "A Dog class implementing the makeSound() method",
                'b' => "An interface defining methods like draw() and area()",
                'c' => "An abstract class with the breathe() method defined",
                'd' => "A program's graphical user interface",
                'correct' => "a",
                'explanation' => "Low-level abstraction deals with concrete implementations. A Dog class implementing makeSound() provides a direct and detailed implementation, making it a lower level of abstraction.",
                'code' => null,
            ],
            [
                'category' => 'abstraction',
                'question' => "What level of abstraction does the Animal class represent?",
                'a' => "High-Level",
                'b' => "Mid-Level",
                'c' => "Low-Level",
                'd' => "None of the above",
                'correct' => "b",
                'explanation' => "The Animal class is an abstract class containing both abstract and concrete methods. This represents a mid-level abstraction since it provides a base structure while allowing subclasses to define specific behaviors.",
                'code' => 'abstract class Animal {
    abstract void makeSound();
    void breathe() {
        System.out.println("Breathing...");
    }
}',
            ],
            [
                'category' => 'abstraction',
                'question' => "Which of the following is NOT a benefit of abstraction?",
                'a' => "Simplifies complexity",
                'b' => "Enhances reusability",
                'c' => "Makes code execution faster",
                'd' => "Improves maintainability",
                'correct' => "c",
                'explanation' => "Abstraction helps with code organization, maintainability, and reusability, but it does not directly improve execution speed.",
                'code' => null,
            ],
            [
                'category' => 'abstraction',
                'question' => "What is an example of abstraction in real life?",
                'a' => "Opening a car hood to repair the engine",
                'b' => "Typing a message and sending it without knowing how it's delivered",
                'c' => "Cooking by following a detailed recipe",
                'd' => "Manually calculating a sum instead of using a calculator",
                'correct' => "b",
                'explanation' => "When you send a message, you don’t need to understand the internal processes of how it is transmitted. This is an example of abstraction—hiding complex details while exposing a simple interface.",
                'code' => null,
            ],
            [
                'category' => 'abstraction',
                'question' => "Why are abstract classes preferred for mid-level abstraction?",
                'a' => "They can include both abstract and concrete methods",
                'b' => "They hide all implementation details",
                'c' => "They enforce a specific coding style",
                'd' => "They are faster to compile",
                'correct' => "a",
                'explanation' => "Abstract classes allow for a mix of abstract and concrete methods, making them ideal for mid-level abstraction where some functionality is defined while others are left for subclasses.",
                'code' => null,
            ],
            [
                'category' => 'abstraction',
                'question' => "How does abstraction encourage modularity?",
                'a' => "By allowing only a single object to exist",
                'b' => "By breaking down systems into independent, manageable components",
                'c' => "By enforcing strict coding rules",
                'd' => "By restricting the use of concrete classes",
                'correct' => "b",
                'explanation' => "Abstraction allows large systems to be divided into smaller, independent modules, making them easier to develop, test, and maintain.",
                'code' => null,
            ],
            [
                'category' => 'abstraction',
                'question' => "What is the main purpose of an abstract class in Java?",
                'a' => "To create objects.",
                'b' => "To serve as a blueprint for other classes.",
                'c' => "To store constant values.",
                'd' => "To replace interfaces.",
                'correct' => "b",
                'explanation' => "Abstract classes act as blueprints for other classes, defining common behavior but not allowing direct instantiation.",
                'code' => null,
            ],
            [
                'category' => 'abstraction',
                'question' => "Which keyword is used to declare an abstract class in Java?",
                'a' => "static",
                'b' => "final",
                'c' => "abstract",
                'd' => "public",
                'correct' => "c",
                'explanation' => "The 'abstract' keyword is used to define an abstract class in Java, indicating that it cannot be instantiated directly.",
                'code' => null,
            ],
            [
                'category' => 'abstraction',
                'question' => "What is true about abstract methods?",
                'a' => "They have a body.",
                'b' => "They must be implemented in a subclass.",
                'c' => "They cannot exist in an abstract class.",
                'd' => "They are optional to override in subclasses.",
                'correct' => "b",
                'explanation' => "Abstract methods do not have a body and must be implemented by subclasses of an abstract class.",
                'code' => null,
            ],
            [
                'category' => 'abstraction',
                'question' => "Can you create an object directly from an abstract class?",
                'a' => "Yes, using the new keyword.",
                'b' => "No, abstract classes cannot be instantiated.",
                'c' => "Yes, but only with special methods.",
                'd' => "No, unless it contains only concrete methods.",
                'correct' => "b",
                'explanation' => "Abstract classes cannot be instantiated directly; they require a subclass that implements all abstract methods.",
                'code' => null, 
            ],
            [
                'category' => 'abstraction',
                'question' => "What type of method is eat() in the following code?",
                'a' => "Abstract method",
                'b' => "Concrete method",
                'c' => "Static method",
                'd' => "Final method",
                'correct' => "b",
                'explanation' => "The eat() method has a body and provides an implementation, making it a concrete method.",
                'code' => 'abstract class Animal {
    abstract void makeSound();
    void eat() {
        System.out.println("This animal eats food.");
    }
}',
            ],
            [
                'category' => 'abstraction',
                'question' => "In the following code, what will myDog.makeSound() output?",
                'a' => "Meow Meow",
                'b' => "Woof Woof",
                'c' => "This animal eats food.",
                'd' => "No output, as Animal is abstract.",
                'correct' => "b",
                'explanation' => "Since Dog overrides makeSound(), calling myDog.makeSound() will output 'Woof Woof'.",
                'code' => 'class Dog extends Animal {
    void makeSound() {
        System.out.println("Woof Woof");
    }
}',
            ],
            [
                'category' => 'abstraction',
                'question' => "What will happen if a subclass does not override all abstract methods of its superclass?",
                'a' => "It will compile successfully.",
                'b' => "The subclass must also be declared abstract.",
                'c' => "It will throw a runtime error.",
                'd' => "The superclass methods will be used by default.",
                'correct' => "b",
                'explanation' => "If a subclass does not implement all abstract methods of its parent, it must also be declared abstract.",
                'code' => null, 
            ],
            [
                'category' => 'abstraction',
                'question' => "Why might you use an abstract class instead of an interface?",
                'a' => "To allow multiple inheritance.",
                'b' => "To provide both abstract and concrete methods.",
                'c' => "To define constants.",
                'd' => "To avoid inheritance.",
                'correct' => "b",
                'explanation' => "Abstract classes allow a mix of abstract and concrete methods, while interfaces contain only abstract methods (before Java 8).",
                'code' => null,
            ],
            [
                'category' => 'abstraction',
                'question' => "Which of the following best describes a concrete class?",
                'a' => "A class with only abstract methods.",
                'b' => "A class that extends an abstract class and implements all its abstract methods.",
                'c' => "A class that cannot be instantiated.",
                'd' => "A class declared with the keyword abstract.",
                'correct' => "b",
                'explanation' => "A concrete class fully implements all abstract methods of its parent class and can be instantiated.",
                'code' => null,
            ],
            [
                'category' => 'abstraction',
                'question' => "What will the main() method output?",
                'a' => "Drawing a square",
                'b' => "Drawing a circle",
                'c' => "Compilation error",
                'd' => "No output",
                'correct' => "b",
                'explanation' => "Since Circle extends Shape and implements draw(), calling myShape.draw() will output 'Drawing a circle'.",
                'code' => 'abstract class Shape {
    abstract void draw();
}

class Circle extends Shape {
    void draw() {
        System.out.println("Drawing a circle");
    }
}
Shape myShape = new Circle();
myShape.draw();',
            ],
            [
                'category' => 'abstraction',
                'question' => "What is an interface in Java?",
                'a' => "A class that contains concrete methods only.",
                'b' => "A class with both abstract and concrete methods.",
                'c' => "A contract specifying what methods a class must implement but not how.",
                'd' => "A method that overrides another method.",
                'correct' => "c",
                'explanation' => "An interface in Java defines a set of methods that a class must implement without providing their implementation.",
                'code' => null, 
            ],
            [
                'category' => 'abstraction',
                'question' => "How does an interface differ from an abstract class?",
                'a' => "Interfaces can only have concrete methods, abstract classes cannot.",
                'b' => "Interfaces define what a class should do, abstract classes define shared behavior.",
                'c' => "Abstract classes allow multiple inheritance, interfaces do not.",
                'd' => "Abstract classes only contain abstract methods, interfaces can have concrete methods.",
                'correct' => "b",
                'explanation' => "Interfaces specify what a class should do, while abstract classes define common behavior that multiple subclasses can share.",
                'code' => null, 
            ],
            [
                'category' => 'abstraction',
                'question' => "What is the correct way for a class to use an interface?",
                'a' => "Extend the interface.",
                'b' => "Implement the interface.",
                'c' => "Import the interface.",
                'd' => "Override the interface.",
                'correct' => "b",
                'explanation' => "A class implements an interface in Java using the `implements` keyword to provide definitions for the interface methods.",
                'code' => null, 
            ],
            [
                'category' => 'abstraction',
                'question' => "What happens if a class implements an interface but does not provide all implementations?",
                'a' => "It throws a compile-time error.",
                'b' => "It runs with default method implementations.",
                'c' => "It becomes an abstract class.",
                'd' => "The missing methods are ignored.",
                'correct' => "c",
                'explanation' => "If a class does not implement all methods of an interface, it must be declared abstract.",
                'code' => null,
            ],
            [
                'category' => 'abstraction',
                'question' => "Which scenario is suitable for using an interface instead of an abstract class?",
                'a' => "When multiple inheritance is required.",
                'b' => "When shared behavior needs to be defined.",
                'c' => "When fields need to be shared among subclasses.",
                'd' => "When creating a base class for related classes.",
                'correct' => "a",
                'explanation' => "Interfaces allow multiple inheritance by letting a class implement multiple interfaces.",
                'code' => null,
            ],
            [
                'category' => 'abstraction',
                'question' => "What is the output of the following code?",
                'a' => "Compilation error",
                'b' => "\"Photo taken.\" and \"Navigating to destination.\"",
                'c' => "No output",
                'd' => "\"Interface methods called.\"",
                'correct' => "b",
                'explanation' => "The code correctly implements both interfaces, so it prints \"Photo taken.\" and \"Navigating to destination.\".",
                'code' => 'interface Camera { 
    void takePhoto(); }
interface GPS { 
    void navigate(); }

class Smartphone implements Camera, GPS {
    public void takePhoto() { 
        System.out.println("Photo taken."); }
    public void navigate() { 
        System.out.println("Navigating to destination."); }
}

Smartphone phone = new Smartphone();
phone.takePhoto();
phone.navigate();',
            ],
            [
                'category' => 'abstraction',
                'question' => "Which keyword is used to define an interface in Java?",
                'a' => "abstract",
                'b' => "extends",
                'c' => "interface",
                'd' => "implements",
                'correct' => "c",
                'explanation' => "The `interface` keyword is used to define an interface in Java.",
                'code' => null,
            ],
            [
                'category' => 'abstraction',
                'question' => "What does the following code represent?",
                'a' => "A class with abstract methods.",
                'b' => "A contract that defines what a class must implement.",
                'c' => "A class with concrete methods only.",
                'd' => "A method that overrides an abstract method.",
                'correct' => "b",
                'explanation' => "An interface in Java acts as a contract that defines method signatures without implementation.",
                'code' => 'interface Vehicle {
    void start();
    void stop();
}',
            ],
            [
                'category' => 'abstraction',
                'question' => "What is the main purpose of implementing multiple interfaces in Java?",
                'a' => "To inherit fields from different classes.",
                'b' => "To avoid overriding methods.",
                'c' => "To provide multiple sets of behavior in a single class.",
                'd' => "To reduce the number of classes in a program.",
                'correct' => "c",
                'explanation' => "A class can implement multiple interfaces to inherit behavior from different sources.",
                'code' => null, 
            ],
            [
                'category' => 'abstraction',
                'question' => "Why might you choose an abstract class over an interface?",
                'a' => "To define unrelated behavior.",
                'b' => "To use multiple inheritance.",
                'c' => "To share fields or common methods among related classes.",
                'd' => "To avoid implementing methods in subclasses.",
                'correct' => "c",
                'explanation' => "Abstract classes allow code reuse by defining fields and concrete methods that subclasses can inherit.",
                'code' => null, 
            ],
            [
                'category' => 'abstraction',
                'question' => 'What is the main purpose of using an abstract class in Java?',
                'a' => 'To create instances of the class.',
                'b' => 'To allow a class to implement multiple interfaces.',
                'c' => 'To provide shared functionality and allow subclasses to implement abstract methods.',
                'd' => 'To define methods that can be overridden only in the parent class.',
                'correct' => 'c',
                'explanation' => "Abstract classes allow code reuse and enforce method implementation in subclasses while also providing concrete methods.",
                'code' => null,
            ],
            [
                'category' => 'abstraction',
                'question' => 'Which class implements the Playable interface?',
                'a' => 'Vehicle',
                'b' => 'Game',
                'c' => 'Playable',
                'd' => 'None of the above',
                'correct' => 'b',
                'explanation' => "The Game class implements the Playable interface by providing a concrete implementation of the play() method.",
                'code' => 'interface Playable { 
    void play(); }

class Game implements Playable {
    public void play() { 
        System.out.println("Game is being played"); }
}',
            ],
            [
                'category' => 'abstraction',
                'question' => 'What is the correct use of the fuelType() method in the Car class?',
                'a' => 'It is inherited from FuelVehicle.',
                'b' => 'It is implemented from the Vehicle interface.',
                'c' => 'It is overridden in the Car class.',
                'd' => 'It is an abstract method in the Car class.',
                'correct' => 'c',
                'explanation' => "The fuelType() method is already defined in FuelVehicle and is being overridden in the Car class.",
                'code' => 'class Car extends FuelVehicle {

    public void fuelType() { 
        System.out.println("Car uses petrol"); }
}',
            ],
            [
                'category' => 'abstraction',
                'question' => 'Which classes implement the GPS interface?',
                'a' => 'FuelVehicle',
                'b' => 'Car',
                'c' => 'Bike',
                'd' => 'FuelVehicle and Car',
                'correct' => 'b',
                'explanation' => "Only the Car class implements the GPS interface, providing the navigate() method.",
                'code' => 'interface GPS { 
        void navigate(); }

class Car implements GPS {
    public void navigate() { 
            System.out.println("Car navigation is on"); }
}

class Bike extends FuelVehicle {}',
            ],
            [
                'category' => 'abstraction',
                'question' => 'Which method does the Game class implement from the Playable interface?',
                'a' => 'play()',
                'b' => 'fuelType()',
                'c' => 'navigate()',
                'd' => 'start()',
                'correct' => 'a',
                'explanation' => "The Game class implements the Playable interface by providing an implementation for play().",
                'code' => 'interface Playable { 
    void play(); }

class Game implements Playable {
    public void play() { 
        System.out.println("Playing the game."); }
}',
            ],
            [
                'category' => 'abstraction',
                'question' => 'Which class implements both the Vehicle and GPS interfaces?',
                'a' => 'FuelVehicle',
                'b' => 'Car',
                'c' => 'Bike',
                'd' => 'Vehicle',
                'correct' => 'b',
                'explanation' => "The Car class implements both the Vehicle and GPS interfaces by defining their required methods.",
                'code' => 'interface Vehicle { void start(); void stop(); }
interface GPS { void navigate(); }

class Car implements Vehicle, GPS {
    public void start() { 
            System.out.println("Starting"); }
    public void navigate() { 
            System.out.println("Navigation on"); }
}',
            ],
            [
                'category' => 'abstraction',
                'question' => 'Which statement about abstract classes and interfaces is true?',
                'a' => 'Abstract classes are used for unrelated classes, interfaces for related classes.',
                'b' => 'Abstract classes can implement interfaces.',
                'c' => 'Interfaces can have constructors.',
                'd' => 'Abstract classes cannot have concrete methods.',
                'correct' => 'b',
                'explanation' => "Abstract classes can implement interfaces and provide method definitions for some of their methods.",
                'code' => null, 
            ],
            [
                'category' => 'abstraction',
                'question' => 'What is the primary benefit of using interfaces in Java?',
                'a' => 'To define shared functionality across multiple unrelated classes.',
                'b' => 'To define default methods for the classes that implement the interface.',
                'c' => 'To provide a common ancestor for unrelated classes.',
                'd' => 'To allow a class to have only one implementation.',
                'correct' => 'a',
                'explanation' => "Interfaces allow different, unrelated classes to implement shared behavior without being part of the same class hierarchy.",
                'code' => null, 
            ],
            //Encapsulation
            [
                'category' => 'encapsulation',
                'question' => 'What does encapsulation mean in Java?',
                'a' => 'Combining data and methods into a single unit.',
                'b' => 'Separating data from methods.',
                'c' => 'Accessing private data directly.',
                'd' => 'Hiding methods from other classes.',
                'correct' => 'a',
                'explanation' => "Encapsulation is the bundling of data and methods that operate on the data into a single unit. It is used to hide the internal state of an object and restrict access to the object's data.",
                'code' => null,
            ],
            [
                'category' => 'encapsulation',
                'question' => 'Which of the following is NOT a benefit of encapsulation?',
                'a' => 'Security',
                'b' => 'Flexibility',
                'c' => 'Code complexity',
                'd' => 'Maintainability',
                'correct' => 'c',
                'explanation' => "Encapsulation helps improve security, flexibility, and maintainability by hiding the internal state of an object. It does not increase code complexity.",
                'code' => null,
            ],
            [
                'category' => 'encapsulation',
                'question' => 'What is data hiding in encapsulation?',
                'a' => 'Making data public for easy access.',
                'b' => 'Protecting data by making it private.',
                'c' => 'Deleting unused data.',
                'd' => 'Storing data in external files.',
                'correct' => 'b',
                'explanation' => "Data hiding is the process of making data private to prevent direct access from outside the class. This helps protect the data and ensures that it can only be accessed through the class's methods.",
                'code' => null,
            ],
            [
                'category' => 'encapsulation',
                'question' => 'Which of these is an example of encapsulation?',
                'a' => 'A bank account with private balance and public methods.',
                'b' => 'A method that prints data directly.',
                'c' => 'A program with only global variables.',
                'd' => 'A class with only public attributes.',
                'correct' => 'a',
                'explanation' => "A bank account with a private balance and public methods to deposit and withdraw money is an example of encapsulation. The private balance is hidden from direct access and can only be modified through the public methods.",
                'code' => null,
            ],
            [
                'category' => 'encapsulation',
                'question' => 'Which access modifier restricts access to within the same class only?',
                'a' => 'Public',
                'b' => 'Protected',
                'c' => 'Private',
                'd' => 'Default',
                'correct' => 'c',
                'explanation' => "The private access modifier restricts access to within the same class only. It is used to hide the internal state of an object and prevent direct access to its data.",
                'code' => null,
            ],
            [
                'category' => 'encapsulation',
                'question' => 'What is the purpose of getters in Java?',
                'a' => 'To directly access private variables.',
                'b' => 'To set values for private variables.',
                'c' => 'To retrieve values of private variables.',
                'd' => 'To delete private variables.',
                'correct' => 'c',
                'explanation' => "Getters are methods used to retrieve the values of private variables. They provide controlled access to the private data of an object.",
                'code' => null,
            ],
            [
                'category' => 'encapsulation',
                'question' => 'Which access modifier allows access within the same package and subclasses?',
                'a' => 'Private',
                'b' => 'Default',
                'c' => 'Public',
                'd' => 'Protected',
                'correct' => 'd',
                'explanation' => "The protected access modifier allows access within the same package and subclasses. It provides more visibility than private but less than public.",
                'code' => null,
            ],
            [
                'category' => 'encapsulation',
                'question' => 'Why should we validate input in setters?',
                'a' => 'To improve runtime speed.',
                'b' => 'To ensure data integrity.',
                'c' => 'To avoid writing getters.',
                'd' => 'To bypass encapsulation.',
                'correct' => 'b',
                'explanation' => "Validating input in setters helps ensure data integrity by checking the input before setting the value of a variable. It helps maintain the object's state and prevents invalid data from being stored.",
                'code' => null,
            ],
            [
                'category' => 'encapsulation',
                'question' => 'What is the main purpose of encapsulation?',
                'a' => 'To increase program size.',
                'b' => 'To group unrelated classes.',
                'c' => 'To protect and organize data.',
                'd' => 'To simplify algorithms.',
                'correct' => 'c',
                'explanation' => "The main purpose of encapsulation is to protect and organize data by bundling it with the methods that operate on the data. It helps maintain the integrity of an object and restricts access to its data.",
                'code' => null,
            ],
            [
                'category' => 'encapsulation',
                'question' => 'Which of the following is NOT a real-world example of encapsulation?',
                'a' => 'ATM system hiding hardware details.',
                'b' => 'Bank account with private balance.',
                'c' => 'Public variables shared globally.',
                'd' => 'Mobile phone with hidden components.',
                'correct' => 'c',
                'explanation' => "A bank account with a private balance, an ATM system hiding hardware details, and a mobile phone with hidden components are real-world examples of encapsulation. Public variables shared globally do not demonstrate encapsulation as they are not hidden or protected.",
                'code' => null,
            ],
            [
                'category' => 'encapsulation',
                'question' => 'What does "private" keyword in Java signify?',
                'a' => 'Variable can be accessed by all classes.',
                'b' => 'Variable can be accessed only within the class.',
                'c' => 'Variable can be accessed by subclasses only.',
                'd' => 'Variable can be accessed within the package.',
                'correct' => 'b',
                'explanation' => "The 'private' keyword in Java signifies that a variable can be accessed only within the class where it is declared. It is used to hide the internal state of an object and prevent direct access to its data.",
                'code' => null,
            ],
            [
                'category' => 'encapsulation',
                'question' => 'Which access modifier provides the most restricted access?',
                'a' => 'Public',
                'b' => 'Protected',
                'c' => 'Private',
                'd' => 'Default',
                'correct' => 'c',
                'explanation' => "The private access modifier provides the most restricted access by limiting access to within the same class only. It is used to hide the internal state of an object and protect its data.",
                'code' => null,
            ],
            [
                'category' => 'encapsulation',
                'question' => 'What does a setter method typically do?',
                'a' => 'Retrieve the value of a variable.',
                'b' => 'Modify the value of a private variable.',
                'c' => 'Delete a variable.',
                'd' => 'Access a protected method.',
                'correct' => 'b',
                'explanation' => "A setter method is used to modify the value of a private variable. It provides controlled access to the private data of an object and helps maintain the object's state.",
                'code' => null,
            ],
            [
                'category' => 'encapsulation',
                'question' => 'Why is encapsulation important for reusability?',
                'a' => 'It hides unrelated classes.',
                'b' => 'It ensures code is independent of internal changes.',
                'c' => 'It merges all methods into a single function.',
                'd' => 'It provides global variables.',
                'correct' => 'b',
                'explanation' => "Encapsulation is important for reusability because it ensures that code is independent of internal changes. By hiding the internal state of an object, encapsulation allows objects to be used without knowing how they are implemented.",
                'code' => null,
            ],
            [
                'category' => 'encapsulation',
                'question' => 'What is the default access modifier in Java?',
                'a' => 'Private',
                'b' => 'Public',
                'c' => 'Protected',
                'd' => 'Default (package-private)',
                'correct' => 'd',
                'explanation' => "The default access modifier in Java is also known as package-private. It allows access within the same package but not outside the package.",
                'code' => null,
            ],
            [
                'category' => 'encapsulation',
                'question' => 'What is the purpose of data validation in encapsulation?',
                'a' => 'To write longer programs.',
                'b' => 'To ensure objects remain in a valid state.',
                'c' => 'To allow unlimited access to variables.',
                'd' => 'To merge unrelated classes.',
                'correct' => 'b',
                'explanation' => "The purpose of data validation in encapsulation is to ensure that objects remain in a valid state. By validating input in setters, we can prevent invalid data from being stored and maintain the integrity of an object.",
                'code' => null,
            ],
            [
                'category' => 'encapsulation',
                'question' => 'What is a key characteristic of encapsulated classes?',
                'a' => 'Directly accessible public fields.',
                'b' => 'Methods to control data access.',
                'c' => 'Unlimited visibility of variables.',
                'd' => 'Only static methods.',
                'correct' => 'b',
                'explanation' => "A key characteristic of encapsulated classes is that they have methods to control data access. By using getters and setters, encapsulated classes can provide controlled access to their private data.",
                'code' => null,
            ],
            [
                'category' => 'encapsulation',
                'question' => 'Why should fields in an encapsulated class be private?',
                'a' => 'To restrict unauthorized access.',
                'b' => 'To increase program length.',
                'c' => 'To allow unrestricted access.',
                'd' => 'To make debugging harder.',
                'correct' => 'a',
                'explanation' => "Fields in an encapsulated class should be private to restrict unauthorized access and prevent direct modification of the object's data. This helps maintain the integrity of the object and ensures that data is accessed through controlled methods.",
                'code' => null,
            ],
            [
                'category' => 'encapsulation',
                'question' => 'Which of the following best describes a "getter" method?',
                'a' => 'A method to directly access public variables.',
                'b' => 'A method that returns private field values.',
                'c' => 'A method to delete variables.',
                'd' => 'A method to validate user input.',
                'correct' => 'b',
                'explanation' => "A 'getter' method is used to return the values of private fields in an object. It provides controlled access to the object's data and allows other classes to retrieve the values of private variables.",
                'code' => null,
            ],
            [
                'category' => 'encapsulation',
                'question' => 'What is a real-world analogy of a setter method?',
                'a' => 'Reading a book.',
                'b' => 'Adding money to a bank account.',
                'c' => 'Deleting old files.',
                'd' => 'Viewing a movie.',
                'correct' => 'b',
                'explanation' => "A real-world analogy of a setter method is adding money to a bank account. Just as a setter method modifies the value of a private variable, adding money to a bank account changes the balance of the account.",
                'code' => null,
            ],
            [
                'category' => 'encapsulation',
                'question' => 'Which access modifier provides unrestricted access?',
                'a' => 'Public',
                'b' => 'Private',
                'c' => 'Protected',
                'd' => 'Default',
                'correct' => 'a',
                'explanation' => "The public access modifier provides unrestricted access to a class or its members. It allows classes from any package to access the public members of a class.",
                'code' => null,
            ],
            [
                'category' => 'encapsulation',
                'question' => 'What happens if data validation in setters is skipped?',
                'a' => 'Data integrity remains intact.',
                'b' => 'Invalid data may be stored.',
                'c' => 'Objects become immutable.',
                'd' => 'Private variables become public.',
                'correct' => 'b',
                'explanation' => "If data validation in setters is skipped, invalid data may be stored in the object, leading to data corruption and unexpected behavior. Data validation helps maintain the integrity of an object and ensures that only valid data is stored.",
                'code' => null,
            ],
            [
                'category' => 'encapsulation',
                'question' => 'Why is encapsulation crucial in software design?',
                'a' => 'To eliminate the need for constructors.',
                'b' => 'To manage dependencies effectively.',
                'c' => 'To maintain object integrity and security.',
                'd' => 'To enable public access to all methods.',
                'correct' => 'c',
                'explanation' => "Encapsulation is crucial in software design to maintain object integrity and security. By hiding the internal state of an object and providing controlled access to its data, encapsulation ensures that the object's state is maintained and data is protected.",
                'code' => null,
            ],
            [
                'category' => 'encapsulation',
                'question' => 'Which method validates input before setting a value?',
                'a' => 'Constructor',
                'b' => 'Getter',
                'c' => 'Setter',
                'd' => 'Destructor',
                'correct' => 'c',
                'explanation' => "A setter method validates input before setting a value to ensure that the data remains in a valid state. It checks the input and prevents invalid data from being stored in the object.",
                'code' => null,
            ],
            [
                'category' => 'encapsulation',
                'question' => 'What is the Java keyword for creating encapsulated fields?',
                'a' => 'Static',
                'b' => 'Private',
                'c' => 'Global',
                'd' => 'External',
                'correct' => 'b',
                'explanation' => "The 'private' keyword in Java is used to create encapsulated fields that are hidden from direct access. It is used to protect the internal state of an object and ensure that data is accessed through controlled methods.",
                'code' => null,
            ],
            [
                'category' => 'encapsulation',
                'question' => 'Encapsulation helps in achieving:',
                'a' => 'Data exposure',
                'b' => 'Loose coupling',
                'c' => 'Global visibility',
                'd' => 'Code redundancy',
                'correct' => 'b',
                'explanation' => "Encapsulation helps in achieving loose coupling by hiding the internal state of an object and providing controlled access to its data. It reduces dependencies between classes and allows objects to interact without knowing the details of each other's implementation.",
                'code' => null,
            ],
            [
                'category' => 'encapsulation',                
                'question' => 'Which of these violates encapsulation principles?',
                'a' => 'Using private fields',
                'b' => 'Using getters and setters',
                'c' => 'Using public fields directly',
                'd' => 'Validating input in setters',
                'correct' => 'c',
                'explanation' => "Using public fields directly violates encapsulation principles as it exposes the internal state of an object and allows direct access to its data. Encapsulation is about hiding the internal state and providing controlled access to the object's data through methods.",
                'code' => null,
            ],
            [
                'category' => 'encapsulation',                
                'question' => 'What does encapsulation help prevent?',
                'a' => 'Inheritance',
                'b' => 'Global access to sensitive data',
                'c' => 'Usage of constructors',
                'd' => 'Polymorphism',
                'correct' => 'b',
                'explanation' => "Encapsulation helps prevent global access to sensitive data by hiding the internal state of an object and providing controlled access to its data. It ensures that data is accessed through methods and prevents unauthorized access to sensitive information.",
                'code' => null,
            ],
            [
                'category' => 'encapsulation',                
                'question' => 'What is a Java class designed to follow encapsulation called?',
                'a' => 'Abstract class',
                'b' => 'Encapsulated class',
                'c' => 'Static class',
                'd' => 'Polymorphic class',
                'correct' => 'b',
                'explanation' => "A Java class designed to follow encapsulation is called an encapsulated class. It encapsulates data and methods into a single unit, hiding the internal state of an object and providing controlled access to its data.",
                'code' => null,
            ],
            [
                'category' => 'encapsulation',                
                'question' => 'What is an example of poor encapsulation practice?',
                'a' => 'Validating user input in setters',
                'b' => 'Using meaningful variable names',
                'c' => 'Making all fields public',
                'd' => 'Providing controlled access through methods',
                'correct' => 'c',
                'explanation' => "Making all fields public is an example of poor encapsulation practice as it exposes the internal state of an object and allows direct access to its data. Encapsulation is about hiding the internal state and providing controlled access through methods.",
                'code' => null,
            ],
            [
                'category' => 'encapsulation',                
                'question' => 'Which access modifier is typically used with getters and setters?',
                'a' => 'Public',
                'b' => 'Private',
                'c' => 'Protected',
                'd' => 'Default',
                'correct' => 'a',
                'explanation' => "Getters and setters are typically declared with the public access modifier to provide controlled access to the private data of an object. The public modifier allows other classes to access the methods that retrieve and modify the object's data.",
                'code' => null,
            ],
            [
                'category' => 'encapsulation',
                'question' => 'What is a valid use of the "this" keyword in setters?',
                'a' => 'To access global variables.',
                'b' => 'To refer to the current object’s fields.',
                'c' => 'To override public methods.',
                'd' => 'To delete private fields.',
                'correct' => 'b',
                'explanation' => "The 'this' keyword in setters is used to refer to the current object's fields. It helps distinguish between the object's fields and the method's parameters when setting the value of a variable.",
                'code' => null,
            ],
            [
                'category' => 'encapsulation',
                'question' => 'How does encapsulation improve maintainability?',
                'a' => 'By exposing internal logic.',
                'b' => 'By centralizing data access.',
                'c' => 'By eliminating constructors.',
                'd' => 'By increasing code complexity.',
                'correct' => 'b',
                'explanation' => "Encapsulation improves maintainability by centralizing data access and providing controlled access to an object's data through methods. It hides the internal state of an object and ensures that data is accessed and modified through controlled methods.",
                'code' => null,
            ],
            [
                'category' => 'encapsulation',
                'question' => 'What is a common naming convention for getters in Java?',
                'a' => 'fetch[Property]()',
                'b' => 'retrieve[Property]()',
                'c' => 'get[Property]()',
                'd' => 'access[Property]()',
                'correct' => 'c',
                'explanation' => "A common naming convention for getters in Java is to use the 'get' prefix followed by the property name. For example, a getter method for a 'balance' property would be named 'getBalance()'.",
                'code' => null,
            ],
            [
                'category' => 'encapsulation',
                'question' => 'What principle ensures sensitive data is only accessed via methods?',
                'a' => 'Inheritance',
                'b' => 'Encapsulation',
                'c' => 'Polymorphism',
                'd' => 'Abstraction',
                'correct' => 'b',
                'explanation' => "Encapsulation is the principle that ensures sensitive data is only accessed via methods. It hides the internal state of an object and provides controlled access to its data, preventing direct access to sensitive information.",
                'code' => null,
            ],
            [
                'category' => 'encapsulation',
                'question' => 'What is the best practice for making an immutable field?',
                'a' => 'Provide a getter only.',
                'b' => 'Provide a setter only.',
                'c' => 'Use public variables.',
                'd' => 'Use global modifiers.',
                'correct' => 'a',
                'explanation' => "The best practice for making an immutable field is to provide a getter only. By not providing a setter, the field cannot be modified once it is set, making it immutable.",
                'code' => null,
            ],
            [
                'category' => 'encapsulation',
                'question' => 'What is encapsulation compared to in real life?',
                'a' => 'An open book',
                'b' => 'A bank vault',
                'c' => 'A broken lock',
                'd' => 'An exposed wire',
                'correct' => 'b',
                'explanation' => "Encapsulation is compared to a bank vault in real life. Just as a bank vault protects valuable items from unauthorized access, encapsulation protects an object's data from direct access and ensures that it can only be accessed through controlled methods.",
                'code' => null,
            ],
            //Inheritance
            [
                'category' => 'inheritance',
                'question' => "What is inheritance in Java?",
                'a' => "A process where a class acquires the properties of another class",
                'b' => "A way to define multiple constructors in a class",
                'c' => "A method to execute parent class methods only",
                'd' => "A tool to create standalone classes",
                'correct' => "a",
                'explanation' => "Inheritance is a mechanism in Java where a new class acquires the properties and behaviors of an existing class. The new class is known as the subclass or derived class, and the existing class is known as the superclass or base class.",
                'code' => null, 
            ],
            [
                'category' => 'inheritance',
                'question' => "Which of the following terms refers to the class being inherited?",
                'a' => "Derived class",
                'b' => "Parent class",
                'c' => "Subclass",
                'd' => "Instance class",
                'correct' => "b",
                'explanation' => "The class being inherited is known as the parent class or superclass. It is the class that provides the properties and behaviors that are inherited by the subclass.",
                'code' => null, 
            ],
            [
                'category' => 'inheritance',
                'question' => "Which of the following statements is true regarding a derived class in OOP?",
                'a' => "A derived class cannot have additional features beyond the base class",
                'b' => "A derived class automatically inherits all methods and fields from its base class",
                'c' => "A derived class cannot access methods from the base class",
                'd' => "A derived class must override all methods from the base class",
                'correct' => "b",
                'explanation' => "A derived class automatically inherits all methods and fields from its base class. It can also add new methods and fields or override existing ones.",
                'code' => null, 
            ],
            [
                'category' => 'inheritance',
                'question' => "Which of the following is a benefit of inheritance?",
                'a' => "It increases the complexity of the code",
                'b' => "It promotes code reusability",
                'c' => "It eliminates the need for methods",
                'd' => "It restricts access to parent class data",
                'correct' => "b",
                'explanation' => "One of the key benefits of inheritance is code reusability. By inheriting properties and behaviors from a parent class, a subclass can reuse existing code and extend it with new features.",
                'code' => null, 
            ],
            [
                'category' => 'inheritance',
                'question' => "What type of inheritance is this?",
                'a' => "Single Inheritance",
                'b' => "Multilevel Inheritance",
                'c' => "Hierarchical Inheritance",
                'd' => "Not an Inheritance",
                'correct' => "b",
                'explanation' => "This is an example of multilevel inheritance, where a class inherits from another class that is also inherited by another class. In this case, class C inherits from class B, which in turn inherits from class A.",
                'code' => "class A {\n} \nclass B extends A {\n} \nclass C extends B {\n}",
            ],
            [
                'category' => 'inheritance',
                'question' => "Which of the following is an example of how inheritance would be used in an object-oriented programming language, such as Java, to model a Motorcycle inheriting from Vehicle?",
                'a' => "class Motorcycle implements Vehicle {}",
                'b' => "class Motorcycle extends Vehicle {}",
                'c' => "class Vehicle extends Motorcycle {}",
                'd' => "class Motorcycle inherits Vehicle {}",
                'correct' => "b",
                'explanation' => "In Java, the extends keyword is used to create a subclass that inherits from a superclass. In this case, the Motorcycle class would extend the Vehicle class to model the relationship between the two.",
                'code' => null, 
            ],
            [
                'category' => 'inheritance',
                'question' => "What is single inheritance?",
                'a' => "When a class is inherited by multiple classes",
                'b' => "When a class inherits properties from one parent class",
                'c' => "When multiple classes share a single method",
                'd' => "When a class inherits methods without attributes",
                'correct' => "b",
                'explanation' => "Single inheritance is when a class inherits properties and methods from a single parent class. The subclass acquires the properties and behaviors of the parent class, allowing for code reuse and extension.",
                'code' => null,
            ],
            [
                'category' => 'inheritance',
                'question' => "What is multilevel inheritance?",
                'a' => "When a class inherits directly from multiple classes",
                'b' => "When a class is inherited by another class that is also inherited",
                'c' => "When all classes in a program share the same properties",
                'd' => "When a class inherits static methods",
                'correct' => "b",
                'explanation' => "Multilevel inheritance is when a class is inherited by another class, which is then inherited by another class. This creates a chain of inheritance, allowing properties and methods to be passed down through multiple levels of classes.",
                'code' => null,
            ],
            [
                'category' => 'inheritance',
                'question' => "What is hierarchical inheritance?",
                'a' => "A single parent class has multiple child classes",
                'b' => "A child class has multiple parent classes",
                'c' => "A parent class inherits from another parent class",
                'd' => "A class that inherits private methods",
                'correct' => "a",
                'explanation' => "Hierarchical inheritance is when a single parent class has multiple child classes. Each child class inherits properties and behaviors from the same parent class, creating a hierarchy of classes.",
                'code' => null,
            ],
            [
                'category' => 'inheritance',
                'question' => "What is a parent class in single inheritance?",
                'a' => "A class that has no methods or attributes",
                'b' => "A class that acquires properties from another class",
                'c' => "A class that provides its properties and behaviors to the child class",
                'd' => "A class that contains only private methods",
                'correct' => "c",
                'explanation' => "In single inheritance, the parent class is the class that provides its properties and behaviors to the child class. The child class inherits these properties and behaviors and can extend them with new features.",
                'code' => null,
            ],
            [
                'category' => 'inheritance',
                'question' => "What is constructor chaining in inheritance?",
                'a' => "Calling one constructor from another within the same class",
                'b' => "Defining multiple constructors with the same parameters",
                'c' => "Calling a parent class constructor from a child class",
                'd' => "Linking methods from parent and child classes",
                'correct' => "c",
                'explanation' => "Constructor chaining in inheritance is when a child class constructor calls a constructor from its parent class. This allows the child class to initialize properties inherited from the parent class.",
                'code' => null,
            ],
            [
                'category' => 'inheritance',
                'question' => "What does the super keyword do in inheritance?",
                'a' => "Calls the immediate parent class constructor or method",
                'b' => "Creates a new instance of the subclass",
                'c' => "Restricts inheritance to a single class",
                'd' => "Declares a class as final",
                'correct' => "a",
                'explanation' => "The super keyword in Java is used to call the immediate parent class constructor or method. It is often used in constructor chaining to initialize properties from the parent class.",
                'code' => null,
            ],
            [
                'category' => 'inheritance',
                'question' => "What is method overriding in Object-Oriented Programming (OOP)?",
                'a' => "A method is defined in multiple classes",
                'b' => "A subclass provides its own implementation for a method that is already defined in its superclass",
                'c' => "A method in the superclass is deleted",
                'd' => "A method is created in the base class only",
                'correct' => "b",
                'explanation' => "Method overriding is when a subclass provides its own implementation for a method that is already defined in its superclass. This allows the subclass to modify the behavior of the inherited method.",
                'code' => null,
            ],
            [
                'category' => 'inheritance',
                'question' => "Which of the following must be true when overriding a method in a subclass?",
                'a' => "The method name can be different from the superclass",
                'b' => "The method signature must match the one in the superclass",
                'c' => "The method in the subclass must have a different return type",
                'd' => "The overridden method must be private",
                'correct' => "b",
                'explanation' => "When overriding a method in a subclass, the method signature must match the one in the superclass. This includes the method name, parameters, and return type.",
                'code' => null,
            ],
            [
                'category' => 'inheritance',
                'question' => "What is the primary difference between method overriding and method overloading?",
                'a' => "Method overriding changes the method signature, while overloading does not",
                'b' => "Overloading allows methods with the same name and parameters, while overriding requires different names",
                'c' => "Overloading is when a subclass provides a specific implementation, while overriding involves methods with different names",
                'd' => "Method overloading involves defining multiple methods with the same name but different parameters, while method overriding allows a subclass to modify a method from the superclass",
                'correct' => "d",
                'explanation' => "Method overloading involves defining multiple methods with the same name but different parameters, while method overriding allows a subclass to modify a method from the superclass. Overloading is resolved at compile time, while overriding is resolved at runtime.",
                'code' => null,
            ],
            [
                'category' => 'inheritance',
                'question' => "What is the purpose of the @Override annotation in Java?",
                'a' => "To indicate that a method is overloaded",
                'b' => "To indicate that a method is intended to override a method in the superclass",
                'c' => "To prevent a method from being overridden",
                'd' => "To define a method that can be accessed by all subclasses",
                'correct' => "b",
                'explanation' => "The @Override annotation in Java is used to indicate that a method is intended to override a method in the superclass. It helps ensure that the method signature matches the one in the superclass.",
                'code' => null,
            ],
            [
                'category' => 'inheritance',
                'question' => "What is the output of the following code?",
                'a' => "Parent's display()",
                'b' => "Child's display()",
                'c' => "Compile-time error",
                'd' => "Runtime error",
                'correct' => "b",
                'explanation' => "The output of the code will be 'Child's display()'. This is an example of method overriding, where the child class provides its own implementation for the display() method defined in the parent class.",
                'code' => <<<JAVA
class Parent {
    void display() {
        System.out.println("Parent's display()");
    }
}

class Child extends Parent {
    @Override
    void display() {
        System.out.println("Child's display()");
    }
}

public class Main {
    public static void main(String[] args) {
        Parent p = new Child();
        p.display();
    }
}
JAVA,
            ],
            [
                'category' => 'inheritance',
                'question' => "What does the super keyword refer to in a subclass?",
                'a' => "The child class",
                'b' => "The immediate parent class",
                'c' => "The constructor of the child class",
                'd' => "The constructor of the superclass",
                'correct' => "b",
                'explanation' => "In Java, the super keyword refers to the immediate parent class. It is used to access methods, fields, and constructors from the superclass in the subclass.",
                'code' => null,
            ],
            [
                'category' => 'inheritance',
                'question' => "If a method in a superclass is private, can it be overridden by a subclass?",
                'a' => "Yes, because private methods are inherited",
                'b' => "No, private methods cannot be inherited",
                'c' => "Yes, if the method signature is the same",
                'd' => "No, private methods can only be accessed within the same class",
                'correct' => "b",
                'explanation' => "Private methods in a superclass cannot be inherited or overridden by a subclass. They are only accessible within the same class and are not visible to subclasses.",
                'code' => null,
            ],
            [
                'category' => 'inheritance',
                'question' => "What would happen if a subclass does not provide an overridden method for a method in its superclass?",
                'a' => "The program will throw an error",
                'b' => "The subclass will use the method from the superclass",
                'c' => "The subclass will ignore the method entirely",
                'd' => "The subclass will automatically create a new method",
                'correct' => "b",
                'explanation' => "If a subclass does not provide an overridden method for a method in its superclass, the subclass will use the method from the superclass. This is known as method inheritance, where the subclass inherits and uses the method from the superclass.",
                'code' => null,
            ],
            [
                'category' => 'inheritance',
                'question' => "What does the final keyword do when applied to a class in Java?",
                'a' => "It prevents a class from having any fields",
                'b' => "It prevents a class from being inherited",
                'c' => "It allows a class to be inherited only once",
                'd' => "It allows a class to have no constructors",
                'correct' => "b",
                'explanation' => "The final keyword, when applied to a class in Java, prevents the class from being inherited by other classes. It makes the class final and cannot be extended.",
                'code' => null,
            ],
            [
                'category' => 'inheritance',
                'question' => "What is the purpose of using the final keyword on a method in Java?",
                'a' => "To prevent the method from being inherited",
                'b' => "To prevent the method from being overridden by subclasses",
                'c' => "To make the method return a constant value",
                'd' => "To ensure the method is always public",
                'correct' => "b",
                'explanation' => "The final keyword, when applied to a method in Java, prevents the method from being overridden by subclasses. It makes the method final and cannot be modified in the child classes.",
                'code' => null,
            ],
            [
                'category' => 'inheritance',
                'question' => "What does the final keyword do when applied to a variable in Java?",
                'a' => "It makes the variable static",
                'b' => "It creates a constant that cannot be modified after initialization",
                'c' => "It allows the variable to be inherited by subclasses",
                'd' => "It makes the variable available only to the parent class",
                'correct' => "b",
                'explanation' => "When the final keyword is applied to a variable in Java, it creates a constant that cannot be modified after initialization. The variable becomes a constant and cannot be changed.",
                'code' => null,
            ],
            [
                'category' => 'inheritance',
                'question' => "In the following code, what will happen when the display() method is called?",
                'a' => "The program will compile and display 'This animal has 2 legs.'",
                'b' => "The program will compile and display 'This animal has 4 legs.'",
                'c' => "The program will throw a compilation error because legs is final",
                'd' => "The program will throw a runtime error",
                'correct' => "c",
                'explanation' => "The program will throw a compilation error because the legs variable is declared as final, which means it cannot be modified after initialization. The display() method attempts to change the value of legs, resulting in a compilation error.",
                'code' => 
<<<JAVA
class Animal {
final int legs = 4;

void display() {
    legs = 2; 
    System.out.println("This animal has " + legs + " legs.");
}
}
JAVA,
            ],
            [
                'category' => 'inheritance',
                'question' => "What is the output of the following code?",
                'a' => "Parent constructor\nChild constructor",
                'b' => "Child constructor\nParent constructor",
                'c' => "Parent constructor",
                'd' => "Child constructor",
                'correct' => "a",
                'explanation' => "The output of the code will be 'Parent constructor\nChild constructor'. This is an example of constructor chaining in inheritance, where the child class constructor calls the parent class constructor using the super keyword.",
                'code' => 
<<<JAVA
class Parent {
Parent() {
    System.out.println("Parent constructor");
}
}

class Child extends Parent {
Child() {
    System.out.println("Child constructor");
}
}

public class Main {
public static void main(String[] args) {
    Child child = new Child();
}
}
JAVA,
            ],
            [
                'category' => 'inheritance',
                'question' => "What is method overriding?",
                'a' => "Defining multiple methods with the same name but different parameters",
                'b' => "A subclass providing its own implementation for a method already defined in its superclass",
                'c' => "A method calling another method",
                'd' => "A method that cannot be overridden",
                'correct' => "b",
                'explanation' => "Method overriding is when a subclass provides its own implementation for a method that is already defined in its superclass. This allows the subclass to modify the behavior of the inherited method.",
                'code' => null,
            ],
            [
                'category' => 'inheritance',
                'question' => "What is the purpose of the super keyword?",
                'a' => "To call the constructor of the current class",
                'b' => "To call the constructor or method of the parent class",
                'c' => "To create a new object",
                'd' => "To define a method",
                'correct' => "b",
                'explanation' => "The super keyword in Java is used to call the constructor or method of the parent class from the child class. It allows the child class to access and use the properties and behaviors of the parent class.",
                'code' => null,
            ],
            [
                'category' => 'inheritance',
                'question' => "What is the output of the following code?",
                'a' => "Parent method\nChild method",
                'b' => "Child method\nParent method",
                'c' => "Parent method",
                'd' => "Child method",
                'correct' => "a",
                'explanation' => "The output of the code will be 'Parent method\nChild method'. This is an example of method overriding, where the child class provides its own implementation for the display() method defined in the parent class.",
                'code' => 
'class Parent {
    void display() {
        System.out.println("Parent method");
    }
}

class Child extends Parent {
    void display() {
        super.display();
        System.out.println("Child method");
    }
}

public class Main {
    public static void main(String[] args) {
        Child child = new Child();
        child.display();
    }
}',
            ],
            [
                'category' => 'inheritance',
                'question' => "What is the output of the following code?",
                'a' => "Parent method",
                'b' => "Child method",
                'c' => "Compilation error",
                'd' => "Runtime error",
                'correct' => "b",
                'explanation' => "The output of the code will be 'Child method'. This is an example of method overriding, where the child class provides its own implementation for the display() method defined in the parent class.",
                'code' => 'class Parent {
    void display() {
        System.out.println("Parent method");
    }
}

class Child extends Parent {
    @Override
    void display() {
        System.out.println("Child method");
    }
}

public class Main {
    public static void main(String[] args) {
        Parent parent = new Child();
        parent.display();
    }
}',
            ],
            [
                'category' => 'inheritance',
                'question' => "What will be the output of the following code?",
                'a' => "Some generic sound",
                'b' => "Bark",
                'c' => "Meow",
                'd' => "Error: No method in Dog class",
                'correct' => "a",
                'explanation' => "The output of the code will be 'Some generic sound'. The Dog class does not override the makeSound() method from the Pet class, so the generic sound from the Pet class is printed.",
                'code' => 'class Pet {
    public void makeSound() {
        System.out.println("Some generic sound");
    }
}

class Dog extends Pet {
    // No method override here
}

public class Main {
    public static void main(String[] args) {
        Pet pet = new Dog();
        pet.makeSound();
    }
}',
            ],
            [
                'category' => 'inheritance',
                'question' => "What is the output of the following code about the store scenario?",
                'a' => "Clothing Name",
                'b' => "Product Name",
                'c' => "Unknown Product",
                'd' => "Error: No method in Clothing class",
                'correct' => "b",
                'explanation' => "The output of the code will be 'Product Name'. The Clothing class does not override the displayName() method from the Product class, so the product name is printed.",
                'code' => 'class Product {
    protected String name;

    public Product(String name) {
        this.name = name;
    }

    public void displayName() {
        System.out.println(name);
    }
}

class Clothing extends Product {
    // No method override here
    public Clothing(String name) {
        super(name);
    }
}

public class Main {
    public static void main(String[] args) {
        Product product = new Clothing("Product Name");
        product.displayName();
    }
}',
            ],
            [
                'category' => 'inheritance',
                'question' => "What is the output of the following code?",
                'a' => "Withdrawal successful. Balance: -100",
                'b' => "Insufficient funds",
                'c' => "Withdrawal successful. Balance: 100",
                'd' => "Compilation error",
                'correct' => "c",
                'explanation' => "The output of the code will be 'Withdrawal successful. Balance: 100'. The SavingsAccount class inherits the withdraw() method from the BankAccount class, allowing it to withdraw funds successfully.",
                'code' => 'class BankAccount {
    double balance = 500;

    public void withdraw(double amount) {
        if (amount > balance) {
            System.out.println("Insufficient funds");
        } else {
            balance -= amount;
            System.out.println("Withdrawal successful. Balance: " + balance);
        }
    }
}

class SavingsAccount extends BankAccount {
    // Inherits from BankAccount
}

public class Main {
    public static void main(String[] args) {
        SavingsAccount account = new SavingsAccount();
        account.withdraw(600); // Trying to withdraw more than the balance
    }
}',
            ],
            [
                'category' => 'inheritance',
                'question' => "What is the output of the following code?",
                'a' => "Speed: 120",
                'b' => "Speed limit exceeded",
                'c' => "Speed: 120 and Speed limit exceeded",
                'd' => "Compilation error",
                'correct' => "a",
                'explanation' => "The output of the code will be 'Speed: 120'. The Car class inherits the accelerate() method from the Vehicle class, allowing it to increase the speed up to 200.",
                'code' => 'class Vehicle {
    int speed;

    public void accelerate(int increment) {
        if (speed + increment > 200) {
            System.out.println("Speed limit exceeded");
        } else {
            speed += increment;
            System.out.println("Speed: " + speed);
        }
    }
}

class Car extends Vehicle {}

public class Main {
    public static void main(String[] args) {
        Car car = new Car();
        car.accelerate(120);
    }
}',
            ],
            [
                'category' => 'inheritance',
                'question' => "What will be the output of the following code?",
                'a' => "Error: No method in Magazine class",
                'b' => "Magazine Title",
                'c' => "The Great Gatsby",
                'd' => "Unknown Book",
                'correct' => "c",
                'explanation' => "The output of the code will be 'The Great Gatsby'. The Magazine class inherits the displayTitle() method from the Book class, allowing it to display the title of the book.",
                'code' => 'class Book {
    protected String title;

    public Book(String title) {
        this.title = title;
    }

    public void displayTitle() {
        System.out.println(title);
    }
}

class Magazine extends Book {
    // No method override here
    public Magazine(String title) {
        super(title);
    }
}

public class Main {
    public static void main(String[] args) {
        Book book = new Magazine("The Great Gatsby");
        book.displayTitle();
    }
}',
            ],
            [
                'category' => 'inheritance',
                'question' => "What will be the output of the following code?",
                'a' => "Employee",
                'b' => "John",
                'c' => "Manager",
                'd' => "Error: No method in Manager class",
                'correct' => "b",
                'explanation' => "The output of the code will be 'John'. The Manager class inherits the displayName() method from the Employee class, allowing it to display the name of the employee.",
                'code' => 'class Employee {
    protected String name;

    public Employee(String name) {
        this.name = name;
    }

    public void displayName() {
        System.out.println(name);
    }
}

class Manager extends Employee {
    public Manager(String name) {
        super(name);
    }
}

public class Main {
    public static void main(String[] args) {
        Employee employee = new Manager("John");
        employee.displayName();
    }
}',
            ],
            [
                'category' => 'inheritance',
                'question' => "What is the output of the following code?",
                'a' => "This is a colored box with value: 0",
                'b' => "50",
                'c' => "Error: Method not found",
                'd' => "This is a colored box with value: 50",
                'correct' => "d",
                'explanation' => "The output of the code will be 'This is a colored box with value: 50'. The ColoredBox class inherits the getValue() method from the Box class and overrides the display() method to print the value.",
                'code' => 'class Box {
    private int value;

    public void setValue(int value) {
        this.value = value;
    }
    public int getValue() {
        return value;
    }
}

class ColoredBox extends Box {
    public void display() {
        System.out.println("This is a colored box with value: " + getValue());
    }
}

public class Main {
    public static void main(String[] args) {
        ColoredBox box = new ColoredBox();
        box.setValue(50);  // Inherited from Box
        box.display();  // From ColoredBox
    }
}',
            ],
            [
                'category' => 'inheritance',
                'question' => "What does the equals() method in the Object class do?",
                'a' => "It compares the memory address of two objects",
                'b' => "It compares the actual content of two objects for equality",
                'c' => "It compares the class name of two objects",
                'd' => "It compares the string representation of two objects",
                'correct' => "b",
                'explanation' => "The equals() method in the Object class compares the actual content of two objects for equality. It is often overridden in subclasses to provide custom comparison logic based on the object's properties.",
                'code' => null,
            ],
            [
                'category' => 'inheritance',
                'question' => "What does the hashCode() method in the Object class provide?",
                'a' => "A string representation of an object",
                'b' => "A unique integer for each object",
                'c' => "The class name of the object",
                'd' => "The memory address of the object",
                'correct' => "b",
                'explanation' => "The hashCode() method in the Object class provides a unique integer value for each object. This value is used by data structures like HashMap to determine the object's storage location.",
                'code' => null,
            ],
            [
                'category' => 'inheritance',
                'question' => "What is the purpose of the instanceof operator in Java?",
                'a' => "To check if an object is an instance of a specific class or subclass",
                'b' => "To create a new instance of a class",
                'c' => "To check if a class is inherited from another class",
                'd' => "To check if two objects are of the same class",
                'correct' => "a",
                'explanation' => "The instanceof operator in Java is used to check if an object is an instance of a specific class or subclass. It returns true if the object is an instance of the specified class or a subclass, and false otherwise.",
                'code' => null,
            ],
            [
                'category' => 'inheritance',
                'question' => "What keyword is used in Java to implement inheritance?",
                'a' => "implements",
                'b' => "super",
                'c' => "extends",
                'd' => "inherit",
                'correct' => "c",
                'explanation' => "The extends keyword in Java is used to implement inheritance. It indicates that a class is inheriting properties and behaviors from another class.",
                'code' => null,
            ],
            [
                'category' => 'inheritance',
                'question' => "In the following code, which class is the parent class?",
                'a' => "Dog",
                'b' => "Animal",
                'c' => "Both Animal and Dog",
                'd' => "None",
                'correct' => "b",
                'explanation' => "In the code provided, the Animal class is the parent class, and the Dog class is the child class. The Dog class inherits properties and behaviors from the Animal class.",
                'code' => 'class Animal { 
    void eat() { 
        System.out.println("This animal eats food.");
    }
}

class Dog extends Animal { 
    void bark() { 
        System.out.println("The dog barks.");
    }
}',
            ],
            [
                'category' => 'inheritance',
                'question' => "How does the super keyword work in inheritance?",
                'a' => "It creates a new object of the parent class",
                'b' => "It allows the child class to access methods, fields, and constructors from the parent class",
                'c' => "It prevents the child class from overriding a method of the parent class",
                'd' => "It creates a method in the child class with the same name as the parent class",
                'correct' => "b",
                'explanation' => "The super keyword in Java allows the child class to access methods, fields, and constructors from the parent class. It is often used to call the parent class constructor or method from the child class.",
                'code' => null,
            ],
            [
                'category' => 'inheritance',
                'question' => "What will be the output of the following program?",
                'a' => "This animal eats food.\nThe dog eats bones.",
                'b' => "The dog eats bones.\nThis animal eats food.",
                'c' => "Compilation error",
                'd' => "No output",
                'correct' => "a",
                'explanation' => "The output of the program will be:\nThis animal eats food.\nThe dog eats bones.\nThe Dog class overrides the eat() method from the Animal class and calls the superclass method using the super keyword to print 'This animal eats food.' before adding 'The dog eats bones.'.",
                'code' => 'class Animal { 
    void eat() { 
        System.out.println("This animal eats food.");
    }
}

class Dog extends Animal { 
    void eat() { 
        super.eat();
        System.out.println("The dog eats bones.");
    }
}

public class Main { 
    public static void main(String[] args) { 
        Dog dog = new Dog();
        dog.eat();
    }
}',
            ],
            [
                'category' => 'inheritance',
                'question' => "When should you use inheritance in Java?",
                'a' => "When the child class is a specialized version of the parent class",
                'b' => "When the child class needs completely different functionality from the parent class",
                'c' => "When you want to hide the properties of the parent class",
                'd' => "When the child class does not need to reuse any methods from the parent class",
                'correct' => "a",
                'explanation' => "Inheritance should be used in Java when the child class is a specialized version of the parent class, meaning it shares common properties and behaviors but may have additional features or modifications.",
                'code' => null,
            ],
            [
                'category' => 'inheritance',
                'question' => "Which of the following is a common use case for inheritance in Java?",
                'a' => "Creating a hierarchy of classes with shared properties and methods",
                'b' => "Implementing polymorphism and method overloading",
                'c' => "Reusing methods within the same class",
                'd' => "Avoiding the use of interfaces",
                'correct' => "a",
                'explanation' => "A common use case for inheritance in Java is creating a hierarchy of classes with shared properties and methods. This allows for code reuse, extensibility, and modeling real-world relationships.",
                'code' => null,
            ],
            [
                'category' => 'inheritance',
                'question' => "Which of the following is a real-world example of inheritance?",
                'a' => "A vehicle and a motorcycle",
                'b' => "A file and a folder",
                'c' => "A string and a number",
                'd' => "A pen and a notebook",
                'correct' => "a",
                'explanation' => "A vehicle and a motorcycle are a real-world example of inheritance. A motorcycle is a specialized type of vehicle that inherits common properties and behaviors from the vehicle class.",
                'code' => null,
            ],
            [
                'category' => 'inheritance',
                'question' => "What differentiates a car and a motorcycle in terms of inheritance?",
                'a' => "A motorcycle is a subclass of a car",
                'b' => "Both are subclasses of a Vehicle class",
                'c' => "A car inherits a motorcycle class",
                'd' => "Inheritance does not apply to cars and motorcycles",
                'correct' => "b",
                'explanation' => "In terms of inheritance, both a car and a motorcycle could be subclasses of a Vehicle class. This allows them to inherit common properties and behaviors from the Vehicle class while adding their own unique features.",
                'code' => null,
            ],
            [
                'category' => 'inheritance',
                'question' => "What is the primary purpose of inheritance in OOP?",
                'a' => "To allow code reuse and establish a relationship between classes",
                'b' => "To create multiple instances of a class",
                'c' => "To define private methods",
                'd' => "To implement interfaces",
                'correct' => "a",
                'explanation' => "The primary purpose of inheritance in object-oriented programming is to allow code reuse and establish a relationship between classes. It enables the creation of a hierarchy of classes with shared properties and behaviors.",
                'code' => null,
            ],
            [
                'category' => 'inheritance',
                'question' => "Which keyword is used to inherit a class in Java?",
                'a' => "inherits",
                'b' => "extends",
                'c' => "implements",
                'd' => "super",
                'correct' => "b",
                'explanation' => "The extends keyword in Java is used to inherit a class. It indicates that a subclass is inheriting properties and behaviors from a superclass.",
                'code' => null,
            ],
            [
                'category' => 'inheritance',
                'question' => "Can a class in Java inherit multiple classes?",
                'a' => "Yes, using the extends keyword",
                'b' => "Yes, using the implements keyword",
                'c' => "No, Java does not support multiple inheritance",
                'd' => "Yes, using both extends and implements keywords",
                'correct' => "c",
                'explanation' => "Java does not support multiple inheritance, where a class inherits properties and behaviors from multiple classes. This is to avoid issues like the diamond problem and maintain code simplicity.",
                'code' => null,
            ],
            //polymorphism
            [
                'category' => 'polymorphism',
                'question' => "What does polymorphism mean in programming?",
                'a' => "The ability to change data types",
                'b' => "The ability of one type to take multiple forms",
                'c' => "A way to write complex code",
                'd' => "A method to override parent classes",
                'correct' => "b",
                'explanation' => "Polymorphism allows objects to be treated as instances of their parent class or as their own class. This flexibility is a key feature of object-oriented programming.",
                'code' => null,
            ],
            [
                'category' => 'polymorphism',
                'question' => "Name the two types of polymorphism in Java.",
                'a' => "Static and Dynamic",
                'b' => "Early and Late",
                'c' => "Compile-time and Runtime",
                'd' => "Both A and C",
                'correct' => "d",
                'explanation' => "Static polymorphism is resolved at compile time, while dynamic polymorphism is resolved at runtime.",
                'code' => null,
            ],
            [
                'category' => 'polymorphism',
                'question' => "What is another name for static polymorphism?",
                'a' => "Runtime Polymorphism",
                'b' => "Late Binding",
                'c' => "Compile-time Polymorphism",
                'd' => "Method Overriding",
                'correct' => "c",
                'explanation' => "Static polymorphism is also known as compile-time polymorphism because method resolution occurs during compilation.",
                'code' => null,
            ],
            [
                'category' => 'polymorphism',
                'question' => "What is another name for dynamic polymorphism?",
                'a' => "Compile-time Polymorphism",
                'b' => "Method Overloading",
                'c' => "Runtime Polymorphism",
                'd' => "Early Binding",
                'correct' => "c",
                'explanation' => "Dynamic polymorphism is also known as runtime polymorphism because method resolution occurs during program execution.",
                'code' => null,
            ],
            [
                'category' => 'polymorphism',
                'question' => "What is method overloading?",
                'a' => "Defining methods with the same name but different parameters",
                'b' => "Overriding methods from a parent class",
                'c' => "Using methods without parameters",
                'd' => "None of the above",
                'correct' => "a",
                'explanation' => "Method overloading allows multiple methods with the same name but different parameters to be defined in the same class.",
                'code' => null,
            ],
            [
                'category' => 'polymorphism',
                'question' => "How does constructor overloading differ from method overloading?",
                'a' => "Constructor overloading doesn't exist",
                'b' => "Constructor overloading applies to constructors only",
                'c' => "Method overloading applies to constructors only",
                'd' => "Both are the same",
                'correct' => "b",
                'explanation' => "Constructor overloading allows multiple constructors with different parameters to be defined in the same class.",
                'code' => null,
            ],
            [
                'category' => 'polymorphism',
                'question' => "Does Java support operator overloading explicitly?",
                'a' => "Yes",
                'b' => "No",
                'c' => "Only for addition",
                'd' => "Only for subtraction",
                'correct' => "b",
                'explanation' => "Java does not support operator overloading for user-defined classes, unlike some other languages like C++.",
                'code' => null,
            ],
            [
                'category' => 'polymorphism',
                'question' => "What is type promotion in method overloading?",
                'a' => "Converting a large data type to a smaller one",
                'b' => "Automatically converting a smaller data type to a larger one",
                'c' => "Promoting methods to the parent class",
                'd' => "None of the above",
                'correct' => "b",
                'explanation' => "Type promotion in method overloading automatically converts smaller data types to larger ones to match the method signature.",
                'code' => null,
            ],
            [
                'category' => 'polymorphism',
                'question' => "What is method overriding?",
                'a' => "Methods sharing the same name and parameters in different classes",
                'b' => "Methods in the same class with different parameters",
                'c' => "Methods in the same class with no parameters",
                'd' => "None of the above",
                'correct' => "a",
                'explanation' => "Method overriding occurs when a subclass provides a specific implementation of a method defined in its parent class.",
                'code' => null,
            ],
            [
                'category' => 'polymorphism',
                'question' => "What determines which overridden method is executed at runtime?",
                'a' => "The reference type",
                'b' => "The actual object type",
                'c' => "The compiler",
                'd' => "None of the above",
                'correct' => "b",
                'explanation' => "The actual object type determines which overridden method is executed at runtime, not the reference type.",
                'code' => null,
            ],
            [
                'category' => 'polymorphism',
                'question' => "What is the output of the following code about the zoo management system scenario?",
                'a' => "Bark",
                'b' => "Some generic animal sound",
                'c' => "Meow",
                'd' => "Compilation error",
                'correct' => "b",
                'explanation' => "The code demonstrates polymorphism by calling the makeSound method of the Dog class through a reference to the Animal class.",
                'code' => 'class Animal {
    public void makeSound() {
        System.out.println("Some generic animal sound");
    }
}

class Dog extends Animal {
    @Override
    public void makeSound() {
        System.out.println("Bark");
    }
}

public class Main {
    public static void main(String[] args) {
        Animal animal = new Dog(); // Polymorphism: Parent reference, child object
        animal.makeSound();
    }
}',
            ],
            [
                'category' => 'polymorphism',
                'question' => "What is the output of the following code about the payment system scenario?",
                'a' => "Processing generic payment",
                'b' => "Error: Method not found",
                'c' => "Processing credit card payment",
                'd' => "Compilation error",
                'correct' => "c",
                'explanation' => "The code demonstrates polymorphism by calling the processPayment method of the CreditCard class through a reference to the Payment class.",
                'code' => 'class Payment {
    public void processPayment() {
        System.out.println("Processing generic payment");
    }
}

class CreditCard extends Payment {
    @Override
    public void processPayment() {
        System.out.println("Processing credit card payment");
    }
}

public class Main {
    public static void main(String[] args) {
        Payment payment = new CreditCard(); // Polymorphism: Parent reference, child object
        payment.processPayment();
    }
}',
            ],
            [
                'category' => 'polymorphism',
                'question' => "What is the output of the following code about the online store scenario?",
                'a' => "Applying general discount",
                'b' => "Applying seasonal discount",
                'c' => "No discount applied",
                'd' => "Compilation error",
                'correct' => "b",
                'explanation' => "The code demonstrates polymorphism by calling the applyDiscount method of the SeasonalDiscount class through a reference to the Discount class.",
                'code' => 'class Discount {
    public void applyDiscount() {
        System.out.println("Applying general discount");
    }
}

class SeasonalDiscount extends Discount {
    @Override
    public void applyDiscount() {
        System.out.println("Applying seasonal discount");
    }
}

public class Main {
    public static void main(String[] args) {
        Discount discount = new SeasonalDiscount(); // Polymorphism: Parent reference, child object
        discount.applyDiscount();
    }
}',
            ],
            [
                'category' => 'polymorphism',
                'question' => "What is the output of the following code about the transportation system scenario?",
                'a' => "Starting vehicle engine",
                'b' => "Starting car engine",
                'c' => "Engine not started",
                'd' => "Compilation error",
                'correct' => "b",
                'explanation' => "The code demonstrates polymorphism by calling the startEngine method of the Car class through a reference to the Vehicle class.",
                'code' => 'class Vehicle {
    public void startEngine() {
        System.out.println("Starting vehicle engine");
    }
}

class Car extends Vehicle {
    @Override
    public void startEngine() {
        System.out.println("Starting car engine");
    }
}

public class Main {
    public static void main(String[] args) {
        Vehicle vehicle = new Car(); // Polymorphism: Parent reference, child object
        vehicle.startEngine();
    }
}',
            ],
            [
                'category' => 'polymorphism',
                'question' => "What is the output of the following code in the company scenario?",
                'a' => "Employee is working",
                'b' => "Compilation error",
                'c' => "Employee is managing the team",
                'd' => "Manager is managing the team",
                'correct' => "d",
                'explanation' => "The code demonstrates polymorphism by calling the work method of the Manager class through a reference to the Employee class.",
                'code' => 'class Employee {
    public void work() {
        System.out.println("Employee is working");
    }
}
class Manager extends Employee {
    @Override
    public void work() {
        System.out.println("Manager is managing the team");
    }
}
public class Main {
    public static void main(String[] args) {
        Employee employee = new Manager(); // Polymorphism: Parent reference, child object
        employee.work();
    }
}',
            ],
            [
                'category' => 'polymorphism',
                'question' => "What is the output of the following code about the media player scenario?",
                'a' => "Playing media",
                'b' => "Playing audio file",
                'c' => "Playing audio file Playing video file",
                'd' => "Playing media Playing media",
                'correct' => "c",
                'explanation' => "The code demonstrates polymorphism by calling the play method of the Audio and Video classes through references to the Media class.",
                'code' => 'class Media {
    public void play() {
        System.out.println("Playing media");
    }
}
class Audio extends Media {
    @Override
    public void play() {
        System.out.println("Playing audio file");
    }
}
class Video extends Media {
    @Override
    public void play() {
        System.out.println("Playing video file");
    }
}
public class Main {
    public static void main(String[] args) {
        Media media1 = new Audio();  // Polymorphism: Parent reference, Audio object
        Media media2 = new Video();  // Polymorphism: Parent reference, Video object
        
        media1.play();
        media2.play();
    }
}',
            ],
            [
                'category' => 'polymorphism',
                'question' => "Which of the following cannot be used as a return type for method overriding?",
                'a' => "Covariant types",
                'b' => "Primitive data types",
                'c' => "Unrelated types",
                'd' => "Abstract classes",
                'correct' => "c",
                'explanation' => "Method overriding requires a return type that is a subclass of the parent class method's return type.",
                'code' => null,
            ],
            [
                'category' => 'polymorphism',
                'question' => "What happens if the overridden method in the parent class throws an exception, but the child class method does not?",
                'a' => "Compilation error",
                'b' => "It is allowed",
                'c' => "The exception is ignored",
                'd' => "Runtime error",
                'correct' => "b",
                'explanation' => "A child class method can throw fewer exceptions or no exceptions compared to the parent class method.",
                'code' => null,
            ],
            [
                'category' => 'polymorphism',
                'question' => "Which type of polymorphism is implemented using interfaces in Java?",
                'a' => "Static",
                'b' => "Dynamic",
                'c' => "Compile-time",
                'd' => "None of the above",
                'correct' => "b",
                'explanation' => "Dynamic polymorphism is achieved through method overriding, which is often implemented using interfaces in Java.",
                'code' => null,
            ],
            [
                'category' => 'polymorphism',
                'question' => "What is the role of the super keyword in method overriding?",
                'a' => "Calls the parent class's method.",
                'b' => "Prevents overriding.",
                'c' => "Refers to the current object.",
                'd' => "Creates a new method.",
                'correct' => "a",
                'explanation' => "The super keyword is used to call the parent class's method from the child class's overridden method.",
                'code' => null,
            ],
            [
                'category' => 'polymorphism',
                'question' => "Why can't private methods be overridden?",
                'a' => "They are static.",
                'b' => "They are final by default.",
                'c' => "They are not visible in subclasses.",
                'd' => "None of the above.",
                'correct' => "c",
                'explanation' => "Private methods are not visible in subclasses, so they cannot be overridden.",
                'code' => null,
            ],
            [
                'category' => 'polymorphism',
                'question' => "How does polymorphism promote scalability in software?",
                'a' => "By allowing hardcoding",
                'b' => "By supporting dynamic behavior",
                'c' => "By limiting flexibility",
                'd' => "By avoiding inheritance",
                'correct' => "b",
                'explanation' => "Polymorphism allows for dynamic behavior, making software more adaptable to changes and scalable.",
                'code' => null,
            ],
            [
                'category' => 'polymorphism',
                'question' => "Which design principle is directly supported by polymorphism?",
                'a' => "Encapsulation",
                'b' => "Code reuse",
                'c' => "Open-Closed Principle",
                'd' => "Single Responsibility Principle",
                'correct' => "c",
                'explanation' => "The Open-Closed Principle states that software entities should be open for extension but closed for modification, which is supported by polymorphism.",
                'code' => null,
            ],
            [
                'category' => 'polymorphism',
                'question' => "Why is polymorphism considered an OOP pillar?",
                'a' => "It is unique to Java.",
                'b' => "It integrates other OOP concepts.",
                'c' => "It is used in procedural programming.",
                'd' => "It works without objects.",
                'correct' => "b",
                'explanation' => "Polymorphism is a key feature of object-oriented programming that integrates with other OOP concepts like inheritance and encapsulation.",
                'code' => null,
            ],
            [
                'category' => 'polymorphism',
                'question' => "Which of the following can break polymorphism?",
                'a' => "Final methods",
                'b' => "Interfaces",
                'c' => "Abstract classes",
                'd' => "Method overloading",
                'correct' => "a",
                'explanation' => "Final methods cannot be overridden, which can break polymorphism by restricting dynamic behavior.",
                'code' => null,
            ],
            [
                'category' => 'polymorphism',
                'question' => "What is required to implement polymorphism in real-world applications?",
                'a' => "Using static methods only",
                'b' => "Having a parent-child class relationship",
                'c' => "Avoiding dynamic behavior",
                'd' => "Using primitive types",
                'correct' => "b",
                'explanation' => "Polymorphism is implemented through inheritance and method overriding, which require a parent-child class relationship.",
                'code' => null,
            ],
            [
                'category' => 'polymorphism',
                'question' => "What does it mean if a reference variable is 'polymorphic'?",
                'a' => "It can hold objects of different types.",
                'b' => "It is restricted to one type only.",
                'c' => "It cannot access overridden methods.",
                'd' => "It is only used for interfaces.",
                'correct' => "a",
                'explanation' => "A polymorphic reference variable can hold objects of different types, allowing for dynamic behavior.",
                'code' => null,
            ],
            [
                'category' => 'polymorphism',
                'question' => "Which of these is an example of dynamic polymorphism?",
                'a' => "A method overloaded in the same class",
                'b' => "A subclass overriding a parent class method",
                'c' => "A method with no parameters",
                'd' => "A private method",
                'correct' => "b",
                'explanation' => "Dynamic polymorphism occurs when a subclass provides a specific implementation of a method defined in its parent class.",
                'code' => null,
            ],
            [
                'category' => 'polymorphism',
                'question' => "Why is method overriding commonly used in frameworks?",
                'a' => "To simplify object creation",
                'b' => "To allow customization of behavior",
                'c' => "To eliminate inheritance",
                'd' => "To restrict dynamic behavior",
                'correct' => "b",
                'explanation' => "Method overriding allows subclasses to provide specific implementations of parent class methods, enabling customization of behavior in frameworks.",
                'code' => null,
            ],
            [
                'category' => 'polymorphism',
                'question' => "What happens when an overridden method in a child class is called using a parent class reference?",
                'a' => "The parent's version is executed.",
                'b' => "The child's version is executed.",
                'c' => "Both versions are executed.",
                'd' => "Compilation error.",
                'correct' => "b",
                'explanation' => "When an overridden method is called using a parent class reference, the child class's version is executed due to dynamic polymorphism.",
                'code' => null,
            ],
            [
                'category' => 'polymorphism',
                'question' => "Which keyword should be used to avoid breaking polymorphism in a subclass?",
                'a' => "final",
                'b' => "static",
                'c' => "protected",
                'd' => "private",
                'correct' => "c",
                'explanation' => "The protected keyword allows subclasses to access and override methods without breaking polymorphism.",
                'code' => null,
            ],
            [
                'category' => 'polymorphism',
                'question' => "How does polymorphism simplify API design?",
                'a' => "By supporting fixed behavior",
                'b' => "By allowing a single interface for multiple implementations",
                'c' => "By avoiding inheritance",
                'd' => "By promoting static methods",
                'correct' => "b",
                'explanation' => "Polymorphism simplifies API design by allowing a single interface to be used for multiple implementations, promoting flexibility and code reuse.",
                'code' => null,
            ],
            [
                'category' => 'polymorphism',
                'question' => "Which keyword prevents a method from being overridden?",
                'a' => "final",
                'b' => "static",
                'c' => "protected",
                'd' => "private",
                'correct' => "a",
                'explanation' => "The final keyword prevents a method from being overridden in a subclass, ensuring fixed behavior.",
                'code' => null,
            ],
            //introduction to java
            [
                'category' => 'introtojava',
                'question' => 'Who developed Java, and in what year?',
                'a' => 'Dennis Ritchie, 1985',
                'b' => 'James Gosling, 1991',
                'c' => 'Bjarne Stroustrup, 1983',
                'd' => 'Guido van Rossum, 1990',
                'correct' => 'b',
                'explanation' => 'Java was developed by James Gosling at Sun Microsystems in 1991.',
                'code' => null,
            ],
            [
                'category' => 'introtojava',
                'question' => "Why is Java called 'Java'?",
                'a' => "It is a technical acronym for 'Just Another Virtual Application.'",
                'b' => 'Named after the island Java where it was created.',
                'c' => 'Named after a coffee bean that inspired its creator.',
                'd' => 'It was an arbitrary name chosen randomly.',
                'correct' => 'c',
                'explanation' => 'Java was named after the coffee bean by its creators.',
                'code' => null,
            ],
            [
                'category' => 'introtojava',
                'question' => "What is Java's primary feature that allows it to run on any platform?",
                'a' => 'Its simplicity',
                'b' => 'The JVM and bytecode',
                'c' => 'Its security features',
                'd' => 'Its use of pointers',
                'correct' => 'b',
                'explanation' => "Java's JVM and bytecode allow it to run on any platform without recompilation.",
                'code' => null,
            ],
            [
                'category' => 'introtojava',
                'question' => 'Which feature of Java makes it simpler compared to other languages like C++?',
                'a' => 'Use of pointers',
                'b' => 'Complex syntax',
                'c' => 'Elimination of complex features',
                'd' => 'Incompatibility with C or C++',
                'correct' => 'c',
                'explanation' => 'Java eliminates complex features like pointers, operator overloading, and multiple inheritance.',
                'code' => null,
            ],
            [
                'category' => 'introtojava',
                'question' => 'Which of these is NOT a feature of Java?',
                'a' => 'Platform Independence',
                'b' => 'Robustness',
                'c' => 'High Performance',
                'd' => 'Dependency on OS-specific compilers',
                'correct' => 'd',
                'explanation' => 'Java is platform-independent and does not depend on OS-specific compilers.',
                'code' => null,
            ],
            [
                'category' => 'introtojava',
                'question' => 'Which of the following is NOT a Java use case?',
                'a' => 'Web applications',
                'b' => 'Mobile applications',
                'c' => 'Operating system development',
                'd' => 'Internet of Things applications',
                'correct' => 'c',
                'explanation' => 'Java is not typically used for operating system development.',
                'code' => null,
            ],
            [
                'category' => 'introtojava',
                'question' => 'What is the starting point of any Java program?',
                'a' => 'The System class',
                'b' => 'The public keyword',
                'c' => 'The main method',
                'd' => 'The package declaration',
                'correct' => 'c',
                'explanation' => 'The main method is the starting point of any Java program.',
                'code' => null,
            ],
            [
                'category' => 'introtojava',
                'question' => 'What is the correct way to write a single-line comment in Java?',
                'a' => '# This is a comment',
                'b' => '// This is a comment',
                'c' => '<!-- This is a comment -->',
                'd' => '/* This is a comment */',
                'correct' => 'b',
                'explanation' => 'Single-line comments in Java are written using two forward slashes.',
                'code' => null,
            ],
            [
                'category' => 'introtojava',
                'question' => 'Which of the following is NOT a primitive data type in Java?',
                'a' => 'int',
                'b' => 'double',
                'c' => 'String',
                'd' => 'boolean',
                'correct' => 'c',
                'explanation' => 'String is a reference data type, not a primitive data type in Java.',
                'code' => null,
            ],
            [
                'category' => 'introtojava',
                'question' => 'Which operator is used for addition in Java?',
                'a' => '*',
                'b' => '+',
                'c' => '/',
                'd' => '=',
                'correct' => 'b',
                'explanation' => 'The + operator is used for addition in Java.',
                'code' => null,
            ],
            [
                'category' => 'introtojava',
                'question' => 'What is the purpose of package declarations in Java?',
                'a' => 'To create comments',
                'b' => 'To organize code into folders',
                'c' => 'To store primitive data types',
                'd' => 'To write the main method',
                'correct' => 'b',
                'explanation' => 'Package declarations in Java are used to organize code into folders.',
                'code' => null,
            ],
            [
                'category' => 'introtojava',
                'question' => 'Which keyword is used to include pre-made code or libraries in Java?',
                'a' => 'package',
                'b' => 'import',
                'c' => 'include',
                'd' => 'namespace',
                'correct' => 'b',
                'explanation' => 'The import keyword is used to include pre-made code or libraries in Java.',
                'code' => null,
            ],
            [
                'category' => 'introtojava',
                'question' => 'Which principle of OOP allows a child class to reuse code from a parent class?',
                'a' => 'Polymorphism',
                'b' => 'Abstraction',
                'c' => 'Encapsulation',
                'd' => 'Inheritance',
                'correct' => 'd',
                'explanation' => 'Inheritance allows a child class to reuse code from a parent class.',
                'code' => null,
            ],
            [
                'category' => 'introtojava',
                'question' => 'Which of these describes polymorphism in Java?',
                'a' => 'Bundling data and methods into a single unit',
                'b' => 'Hiding unnecessary details',
                'c' => 'One action behaving differently depending on the object',
                'd' => 'Allowing secure access to private variables',
                'correct' => 'c',
                'explanation' => 'Polymorphism in Java allows one action to behave differently depending on the object.',
                'code' => null,
            ],
            [
                'category' => 'introtojava',
                'question' => 'What is a class in Java?',
                'a' => 'A variable type',
                'b' => 'A blueprint for creating objects',
                'c' => 'A method that initializes variables',
                'd' => 'A reserved keyword',
                'correct' => 'b',
                'explanation' => 'A class in Java is a blueprint for creating objects.',
                'code' => null,
            ],
            [
                'category' => 'introtojava',
                'question' => 'What are instance variables in a class?',
                'a' => 'Variables shared by all objects of a class',
                'b' => 'Variables declared inside a method',
                'c' => 'Variables declared inside a class, and each object has its own copy',
                'd' => 'Constants defined in a class',
                'correct' => 'c',
                'explanation' => 'Instance variables are declared inside a class, and each object has its own copy.',
                'code' => null,
            ],
            [
                'category' => 'introtojava',
                'question' => 'Which of the following is NOT true about methods in Java?',
                'a' => 'Methods perform actions or computations.',
                'b' => 'Methods can access and modify instance variables.',
                'c' => 'Methods cannot take parameters.',
                'd' => 'Methods are defined inside a class.',
                'correct' => 'c',
                'explanation' => 'Methods in Java can take parameters and perform actions or computations.',
                'code' => null,
            ],
            [
                'category' => 'introtojava',
                'question' => 'What is the purpose of a constructor in Java?',
                'a' => 'To declare variables in a class',
                'b' => 'To perform computations',
                'c' => 'To initialize objects when they are created',
                'd' => 'To define the blueprint of an object',
                'correct' => 'c',
                'explanation' => 'Constructors in Java are used to initialize objects when they are created.',
                'code' => null,
            ],
            [
                'category' => 'introtojava',
                'question' => 'Which statement is correct regarding the default constructor in Java?',
                'a' => 'It must be explicitly declared in every class.',
                'b' => 'It sets default values for instance variables.',
                'c' => 'It always accepts parameters.',
                'd' => 'It is required to create objects.',
                'correct' => 'b',
                'explanation' => 'The default constructor in Java sets default values for instance variables.',
                'code' => null,
            ],
            [
                'category' => 'introtojava',
                'question' => 'What keyword is used to create an instance of a class?',
                'a' => 'new',
                'b' => 'this',
                'c' => 'static',
                'd' => 'instanceOf',
                'correct' => 'a',
                'explanation' => 'The new keyword is used to create an instance of a class in Java.',
                'code' => null,
            ],
            [
                'category' => 'introtojava',
                'question' => 'What does the "this" keyword refer to in Java?',
                'a' => 'The current class',
                'b' => 'The superclass of the current object',
                'c' => 'The current object instance',
                'd' => 'A reserved keyword for memory allocation',
                'correct' => 'c',
                'explanation' => 'The "this" keyword refers to the current object instance in Java.',
                'code' => null,
            ],
            [
                'category' => 'introtojava',
                'question' => 'Which of the following is an example of a parameterized constructor?',
                'a' => 'public Student() {  
    name = "John";  
    age = 20;  
}',
        'b' => 'public Student(String name, int age) {  
    this.name = name;  
    this.age = age;  
}',
        'c' => 'public Student(String name) {  
    this.name = "Default";  
}',
                'd' => 'All of the above',
                'correct' => 'b',
                'explanation' => 'A parameterized constructor takes parameters to initialize object properties.',
                'code' => null,
            ],
            [
                'category' => 'introtojava',
                'question' => 'What will the following code do?',
                'a' => 'It creates an object of the Student class.',
                'b' => 'It creates a reference to a Student object but does not allocate memory.',
                'c' => 'It creates a blueprint of the Student class.',
                'd' => 'It throws a compilation error if the Student class has no constructor.',
                'correct' => 'a',
                'explanation' => 'The code creates an object of the Student class.',
                'code' => 'Student student1 = new Student();',
            ],
            [
                'category' => 'introtojava',
                'question' => 'What is the purpose of the following getAcademicStatus() method in the Student class?',
                'a' => 'To update the student\'s GPA.',
                'b' => 'To calculate and return the student\'s academic standing based on the GPA.',
                'c' => 'To display the student\'s name.',
                'd' => 'To check if the student has passed all subjects.',
                'correct' => 'b',
                'explanation' => 'The getAcademicStatus() method calculates and returns the student\'s academic standing based on the GPA.',
                'code' => 'public class Student {
    private double gpa;

    // Method to calculate academic standing
    public String getAcademicStatus() {
        if (gpa >= 3.5) {
            return "Dean\'s List";
        } else if (gpa >= 3.0) {
            return "Honors";
        } else if (gpa >= 2.0) {
            return "Good Standing";
        } else {
            return "Probation";
        }
    }

    // Method with parameters
    public void updateGPA(double newGPA) {
        this.gpa = newGPA;
    }
}',
            ],
            [
                'category' => 'introtojava',
                'question' => 'What is the primary purpose of Java Class Libraries?',
                'a' => 'To replace built-in classes',
                'b' => 'To provide a wide range of pre-written classes and methods',
                'c' => 'To create new data types',
                'd' => 'To make Java slower',
                'correct' => 'b',
                'explanation' => 'Java Class Libraries provide a wide range of pre-written classes and methods for developers to use.',
                'code' => null,
            ],
            [
                'category' => 'introtojava',
                'question' => 'Which class is used for handling text in Java?',
                'a' => 'Scanner',
                'b' => 'ArrayList',
                'c' => 'Math',
                'd' => 'String',
                'correct' => 'd',
                'explanation' => 'The String class is used for handling text in Java.',
                'code' => null,
            ],
            [
                'category' => 'introtojava',
                'question' => 'What method can you use to read a string input from the user using the Scanner class?',
                'a' => 'nextInt()',
                'b' => 'nextDouble()',
                'c' => 'nextLine()',
                'd' => 'next()',
                'correct' => 'c',
                'explanation' => 'The nextLine() method reads a string input from the user using the Scanner class.',
                'code' => null,
            ],
            [
                'category' => 'introtojava',
                'question' => 'Which of the following is NOT a method of the Math class?',
                'a' => 'Math.pow()',
                'b' => 'Math.random()',
                'c' => 'Math.sqrt()',
                'd' => 'Math.add()',
                'correct' => 'd',
                'explanation' => 'The Math class does not have a method named Math.add().',
                'code' => null,
            ],
            [
                'category' => 'introtojava',
                'question' => 'What does the size() method of the ArrayList class return?',
                'a' => 'The current capacity of the list',
                'b' => 'The number of elements in the list',
                'c' => 'The first element in the list',
                'd' => 'The last element in the list',
                'correct' => 'b',
                'explanation' => 'The size() method of the ArrayList class returns the number of elements in the list.',
                'code' => null,
            ],
            [
                'category' => 'introtojava',
                'question' => 'Which of the following examples correctly uses the Math class?',
                'a' => 'int sum = Math.add(5, 10);',
                'b' => 'double result = Math.pow(2, 3);',
                'c' => 'String text = Math.concat(\'Hello\', \'World\');',
                'd' => 'int random = Math.input();',
                'correct' => 'b',
                'explanation' => 'The Math class is used for mathematical operations like pow() to calculate powers.',
                'code' => null,
            ],
            [
                'category' => 'introtojava',
                'question' => 'Which statement about the String class is true?',
                'a' => 'It can store numbers only.',
                'b' => 'It is used for file handling.',
                'c' => 'It provides methods for manipulating text.',
                'd' => 'It is part of the Collections Framework.',
                'correct' => 'c',
                'explanation' => 'The String class provides methods for manipulating text in Java.',
                'code' => null,
            ],
            [
                'category' => 'introtojava',
                'question' => 'What is the purpose of the close() method in the Scanner class?',
                'a' => 'To stop user input',
                'b' => 'To release resources used by the Scanner',
                'c' => 'To reset the Scanner object',
                'd' => 'To add new input to the Scanner',
                'correct' => 'b',
                'explanation' => 'The close() method in the Scanner class releases resources used by the Scanner object.',
                'code' => null,
            ],
            [
                'category' => 'introtojava',
                'question' => 'What does the following code print?',
                'a' => 'hello, java!',
                'b' => 'HELLO, JAVA!',
                'c' => 'Hello, Java!',
                'd' => 'Error',
                'correct' => 'b',
                'explanation' => 'The toUpperCase() method converts the string to uppercase.',
                'code' => '
        String text = "Hello, Java!";
        System.out.println(text.toUpperCase());',
            ],
            [
                'category' => 'introtojava',
                'question' => 'Which built-in class is part of the Java Collections Framework?',
                'a' => 'Scanner',
                'b' => 'ArrayList',
                'c' => 'Math',
                'd' => 'String',
                'correct' => 'b',
                'explanation' => 'The ArrayList class is part of the Java Collections Framework.',
                'code' => null,
            ],
            [
                'category' => 'introtojava',
                'question' => 'What does the get() method of the ArrayList class do?',
                'a' => 'Adds a new element to the list',
                'b' => 'Removes an element from the list',
                'c' => 'Retrieves an element at a specific index',
                'd' => 'Clears all elements from the list',
                'correct' => 'c',
                'explanation' => 'The get() method of the ArrayList class retrieves an element at a specific index.',
                'code' => null,
            ],
            [
                'category' => 'introtojava',
                'question' => 'What is an ArrayList in Java?',
                'a' => 'A static array with a fixed size',
                'b' => 'A dynamic array that can grow and shrink',
                'c' => 'A two-dimensional array',
                'd' => 'A collection of characters',
                'correct' => 'b',
                'explanation' => 'An ArrayList in Java is a dynamic array that can grow and shrink in size.',
                'code' => null,
            ],
            [
                'category' => 'introtojava',
                'question' => 'What is the correct syntax for importing the Scanner class?',
                'a' => 'include java.util.Scanner;',
                'b' => 'import Scanner;',
                'c' => 'import java.util.Scanner;',
                'd' => 'Scanner java.util;',
                'correct' => 'c',
                'explanation' => 'The correct syntax for importing the Scanner class is import java.util.Scanner.;',
                'code' => null,
            ],
            //introduction to oop
            [
                'category' => 'introtooop',
                'question' => 'What is programming?',
                'a' => 'Designing computer hardware',
                'b' => 'Writing instructions for a computer to follow',
                'c' => 'Solving mathematical equations',
                'd' => 'Drawing flowcharts',
                'correct' => 'b',
                'explanation' => 'Programming involves writing instructions for a computer to execute. These instructions are written in a programming language and define the behavior of the computer.',
                'code' => null,
            ],
            [
                'category' => 'introtooop',
                'question' => 'Which of the following is a correct definition of a programming paradigm?',
                'a' => 'A set of programming languages',
                'b' => 'A way of organizing and solving problems using programming languages',
                'c' => 'A type of operating system',
                'd' => 'A library of functions',
                'correct' => 'b',
                'explanation' => 'A programming paradigm is a way of organizing and solving problems using programming languages. It defines the style and structure of the code written in a particular language.',
                'code' => null,
            ],
            [
                'category' => 'introtooop',
                'question' => 'Which programming paradigm is based on the concept of objects containing data and code?',
                'a' => 'Procedural Programming',
                'b' => 'Functional Programming',
                'c' => 'Object-Oriented Programming',
                'd' => 'Declarative Programming',
                'correct' => 'c',
                'explanation' => 'Object-Oriented Programming (OOP) is based on the concept of objects, which contain both data and code. OOP focuses on modeling real-world entities as objects with attributes and behaviors.',
                'code' => null,
            ],
            [
                'category' => 'introtooop',
                'question' => 'Which of the following is a key benefit of using Object-Oriented Programming?',
                'a' => 'Reduced need for comments in code',
                'b' => 'Better organization by grouping related data and behaviors',
                'c' => 'Faster execution of code',
                'd' => 'Simplified control flow',
                'correct' => 'b',
                'explanation' => 'One of the key benefits of Object-Oriented Programming is better organization by grouping related data and behaviors into objects. This helps in managing complexity and improving code reusability.',
                'code' => null,
            ],
            [
                'category' => 'introtooop',
                'question' => 'What is the purpose of creating a class in Object-Oriented Programming?',
                'a' => 'To define a blueprint for objects',
                'b' => 'To store variables',
                'c' => 'To run algorithms',
                'd' => 'To delete objects',
                'correct' => 'a',
                'explanation' => 'In Object-Oriented Programming, a class is used to define a blueprint for creating objects. It specifies the attributes and behaviors that objects of that class will have.',
                'code' => null,
            ],
            [
                'category' => 'introtooop',
                'question' => 'Which of the following is an example of object-oriented programming in real life?',
                'a' => 'A car object that has attributes like color and model and methods like start and accelerate',
                'b' => 'A loop that calculates a factorial',
                'c' => 'A variable storing a number',
                'd' => 'A function that adds two numbers',
                'correct' => 'a',
                'explanation' => 'A car object with attributes like color and model and methods like start and accelerate is an example of object-oriented programming. The car object represents a real-world entity with specific characteristics and behaviors.',
                'code' => null,
            ],
            [
                'category' => 'introtooop',
                'question' => 'Which of the following programming languages was the first to introduce object-oriented concepts?',
                'a' => 'Java',
                'b' => 'Python',
                'c' => 'Simula',
                'd' => 'C++',
                'correct' => 'c',
                'explanation' => 'The programming language Simula, developed in the 1960s, was the first to introduce object-oriented concepts such as classes and objects. Simula laid the foundation for modern object-oriented programming languages.',
                'code' => null,
            ],
            [
                'category' => 'introtooop',
                'question' => 'Which of the following is NOT a benefit of Object-Oriented Programming?',
                'a' => 'Improved code organization',
                'b' => 'Enhanced testing capabilities',
                'c' => 'Elimination of all bugs in the software',
                'd' => 'Code reusability',
                'correct' => 'b',
                'explanation' => 'While Object-Oriented Programming offers benefits like improved code organization, code reusability, and easier maintenance, it does not directly enhance testing capabilities. Testing is a separate process that ensures the correctness and quality of the software.',
                'code' => null,
            ],
            [
                'category' => 'introtooop',
                'question' => 'What is an object in programming?',
                'a' => 'A set of instructions for a program to follow',
                'b' => 'A blueprint for creating classes',
                'c' => 'A specific instance of a class',
                'd' => 'A type of programming paradigm',
                'correct' => 'c',
                'explanation' => 'An object in programming is a specific instance of a class. Objects have attributes (data) and methods (code) that define their behavior and characteristics.',
                'code' => null,
            ],
            [
                'category' => 'introtooop',
                'question' => 'What is a class in programming?',
                'a' => 'A set of data specific to an object',
                'b' => 'A blueprint or template for creating objects',
                'c' => 'A function that defines the behavior of an object',
                'd' => 'A data field in a program',
                'correct' => 'b',
                'explanation' => 'A class in programming is a blueprint or template for creating objects. It defines the attributes and methods that objects of that class will have.',
                'code' => null,
            ],
            [
                'category' => 'introtooop',
                'question' => 'What are attributes in an object?',
                'a' => 'Actions the object can perform',
                'b' => 'Data fields that define characteristics of the object',
                'c' => 'A set of instructions for creating an object',
                'd' => 'Relationships between different objects',
                'correct' => 'b',
                'explanation' => 'Attributes in an object are data fields that define the characteristics or properties of the object. They represent the state of the object and can be accessed or modified through methods.',
                'code' => null,
            ],
            [
                'category' => 'introtooop',
                'question' => 'If a class is a blueprint for a motorcycle, which of the following would be an example of an object of the motorcycle class?',
                'a' => 'A blueprint for building a motorcycle',
                'b' => 'A specific motorcycle like a Honda CB400 with a 400cc engine',
                'c' => 'A set of behaviors such as starting and accelerating',
                'd' => 'The template used to define attributes like color and brand',
                'correct' => 'b',
                'explanation' => 'An object of the motorcycle class would be a specific motorcycle like a Honda CB400 with a 400cc engine. Objects are instances of a class and represent specific entities with defined attributes and behaviors.',
                'code' => null,
            ],
            [
                'category' => 'introtooop',
                'question' => 'What does the new keyword do when creating an object from a class?',
                'a' => 'It defines the class.',
                'b' => 'It assigns values to the attributes of an object.',
                'c' => 'It creates a specific instance (object) of a class.',
                'd' => 'It modifies the methods of the class.',
                'correct' => 'c',
                'explanation' => 'The new keyword in programming is used to create a specific instance (object) of a class. It allocates memory for the object and initializes its attributes based on the class definition.',
                'code' => null,
            ],
            [
                'category' => 'introtooop',
                'question' => 'Given a class Motorcycle, which of the following is an example of an object?',
                'a' => 'The method accelerate() inside the Motorcycle class',
                'b' => 'A new instance like hondaCB400 created from the Motorcycle class',
                'c' => 'The engine displacement of a motorcycle',
                'd' => 'The Motorcycle class itself',
                'correct' => 'b',
                'explanation' => 'An object is a specific instance of a class, so a new instance like hondaCB400 created from the Motorcycle class would be an example of an object. Objects have attributes and behaviors defined by the class.',
                'code' => null,
            ],
            [
                'category' => 'introtooop',
                'question' => 'Given the following code, what is the output?',
                'a' => 'Error: The class does not have a main method',
                'b' => 'Toyota - 2020',
                'c' => 'Car - 2020',
                'd' => 'Toyota',
                'correct' => 'b',
                'explanation' => 'The output of the code is "Toyota - 2020". The Car class defines a constructor that initializes the brand and year attributes of the object. The displayInfo method then prints the brand and year of the car object.',
                'code' => 'class Car {
    String brand;
    int year;

    Car(String brand, int year) {
        this.brand = brand;
        this.year = year;
    }

    void displayInfo() {
        System.out.println(brand + " - " + year);
    }
}

public class Main {
    public static void main(String[] args) {
        Car car1 = new Car("Toyota", 2020);
        car1.displayInfo();
    }
}',
            ],
            [
                'category' => 'introtooop',
                'question' => 'How would you create an object of the Person class below?',
                'a' => 'Person person = new Person(\'John\', 25);',
                'b' => 'Person person = Person(\'John\', 25);',
                'c' => 'Person person = new Person();',
                'd' => 'new Person = Person(\'John\', 25);',
                'correct' => 'a',
                'explanation' => 'To create an object of the Person class, you use the new keyword followed by the class name and constructor arguments. The correct syntax is: Person person = new Person(\'John\', 25);',
                'code' => 'class Person {
    String name;
    int age;

    Person(String name, int age) {
        this.name = name;
        this.age = age;
    }
}',
            ],
            [
                'category' => 'introtooop',
                'question' => 'What will the following code print?',
                'a' => 'Dog',
                'b' => 'This is a Dog',
                'c' => 'Error: type is not initialized',
                'd' => 'This is an animal',
                'correct' => 'b',
                'explanation' => 'The code will print "This is a Dog". The Animal class defines a displayType method that prints "This is a " followed by the type attribute of the object. When animal1.displayType() is called, it prints "This is a Dog".',
                'code' => 'class Animal {
    String type;

    Animal(String type) {
        this.type = type;
    }

    void displayType() {
        System.out.println(\'This is a \' + type);
    }
}

public class Main {
    public static void main(String[] args) {
        Animal animal1 = new Animal(\'Dog\');
        animal1.displayType();
    }
}',
            ],
            [
                'category' => 'introtooop',
                'question' => 'How do you create an object from the following Book class?',
                'a' => 'Book book = new Book(\'Java Programming\');',
                'b' => 'Book book = Book(\'Java Programming\');',
                'c' => 'new Book(\'Java Programming\');',
                'd' => 'Book book = new Book;',
                'correct' => 'a',
                'explanation' => 'To create an object of the Book class, you use the new keyword followed by the class name and constructor arguments. The correct syntax is: Book book = new Book(\'Java Programming\');',
                'code' => 'class Book {
    String title;

    Book(String title) {
        this.title = title;
    }
}',
            ],
            [
                'category' => 'introtooop',
                'question' => 'What does the following code output?',
                'a' => 'John says hello!',
                'b' => 'Hello!',
                'c' => 'Error: name is not defined',
                'd' => 'John',
                'correct' => 'a',
                'explanation' => 'The code will output "John says hello!". The Person class defines a sayHello method that prints the name attribute followed by " says hello!". When person1.sayHello() is called, it prints "John says hello!".',
                'code' => 'class Person {
    String name;

Person(String name) {
    this.name = name;
}

void sayHello() {
        System.out.println(name + \' says hello!\');
    }
}

public class Main {
    public static void main(String[] args) {
        Person person1 = new Person(\'John\');
        person1.sayHello();
    }
}',
            ],
            [
                'category' => 'introtooop',
                'question' => 'What is the first step in designing a system or application?',
                'a' => 'Writing the main method',
                'b' => 'Identifying objects from requirements',
                'c' => 'Creating constructors for classes',
                'd' => 'Writing pseudocode',
                'correct' => 'b',
                'explanation' => 'The first step in designing a system or application is identifying objects based on the requirements. Objects represent real-world entities or concepts that the system will model.',
                'code' => null,
            ],
            [
                'category' => 'introtooop',
                'question' => 'In the context of Object-Oriented Programming, what is an object?',
                'a' => 'A single data type',
                'b' => 'An instance of a class',
                'c' => 'A Java method',
                'd' => 'A static variable',
                'correct' => 'b',
                'explanation' => 'In Object-Oriented Programming, an object is an instance of a class. Objects have attributes (data) and behaviors (methods) defined by the class.',
                'code' => null,
            ],
            [
                'category' => 'introtooop',
                'question' => 'When designing a system for a library, which of the following could be considered as potential objects?',
                'a' => 'Borrowing rules and fines',
                'b' => 'Book, Member, Staff',
                'c' => 'Library catalog',
                'd' => 'None of the above',
                'correct' => 'b',
                'explanation' => 'In a library system, potential objects could include Book, Member, and Staff. These objects represent real-world entities like books, library members, and staff members.',
                'code' => null,
            ],
            [
                'category' => 'introtooop',
                'question' => 'What are attributes in an object?',
                'a' => 'Behaviors or methods of the object',
                'b' => 'Classes that inherit from a superclass',
                'c' => 'Characteristics or data describing the object',
                'd' => 'Static fields in the class',
                'correct' => 'c',
                'explanation' => 'Attributes in an object are characteristics or data that describe the object. They represent the state of the object and can be accessed or modified through methods.',
                'code' => null,
            ],
            [
                'category' => 'introtooop',
                'question' => 'In a school system, which of the following would likely be identified as an object?',
                'a' => 'The lesson schedule',
                'b' => 'Teachers, Students, Classes',
                'c' => 'The school building\'s location',
                'd' => 'None of the above',
                'correct' => 'b',
                'explanation' => 'In a school system, objects like Teachers, Students, and Classes would likely be identified. These objects represent real-world entities within the school system.',
                'code' => null,
            ],
            [
                'category' => 'introtooop',
                'question' => 'Which of the following is NOT an attribute of a Student object?',
                'a' => 'name',
                'b' => 'age',
                'c' => 'grades',
                'd' => 'teach',
                'correct' => 'd',
                'explanation' => 'The \'teach\' attribute is not typically an attribute of a Student object. Attributes like name, age, and grades are more common for a Student object.',
                'code' => null,
            ],
            [
                'category' => 'introtooop',
                'question' => 'What is the purpose of a constructor in a class?',
                'a' => 'To create static methods',
                'b' => 'To initialize the attributes of an object',
                'c' => 'To call instance methods',
                'd' => 'To define object relationships',
                'correct' => 'b',
                'explanation' => 'A constructor in a class is used to initialize the attributes of an object when the object is created. It sets the initial state of the object based on the provided arguments.',
                'code' => null,
            ],
            [
                'category' => 'introtooop',
                'question' => 'Which relationship in Object-Oriented Programming describes objects that work together but do not own each other?',
                'a' => 'Inheritance',
                'b' => 'Composition',
                'c' => 'Association',
                'd' => 'Encapsulation',
                'correct' => 'c',
                'explanation' => 'Association in Object-Oriented Programming describes objects that work together but do not own each other. It represents a relationship where objects interact with each other.',
                'code' => null,
            ],
            [
                'category' => 'introtooop',
                'question' => 'In the following code snippet, which of these is an example of a behavior?',
                'a' => 'String name',
                'b' => 'String subject',
                'c' => 'teach()',
                'd' => 'Teacher',
                'correct' => 'c',
                'explanation' => 'The teach() method in the Teacher class is an example of a behavior. Behaviors in objects are represented by methods that define what the object can do.',
                'code' => 'public class Teacher {
    String name;
    String subject;

    public void teach() {
        System.out.println(name + " is teaching " + subject);
    }
}',
'code' => null,
            ],
            [
                'category' => 'introtooop',
                'question' => 'What does the main method do?',
                'a' => 'It defines attributes of objects.',
                'b' => 'It initializes objects and calls their behaviors.',
                'c' => 'It defines constructors.',
                'd' => 'It manages static relationships between objects.',
                'correct' => 'b',
                'explanation' => 'The main method in Java initializes objects and calls their behaviors. It serves as the entry point for the program and executes the code that interacts with objects.',
                'code' => null,
            ],
            [
                'category' => 'introtooop',
                'question' => 'What is the primary way objects interact in object-oriented programming?',
                'a' => 'By sharing methods',
                'b' => 'By creating new objects',
                'c' => 'By calling methods or passing data between them',
                'd' => 'By inheriting from the same class',
                'correct' => 'c',
                'explanation' => 'Objects in object-oriented programming primarily interact by calling methods or passing data between them. This interaction allows objects to collaborate and perform tasks.',
                'code' => null,
            ],
            [
                'category' => 'introtooop',
                'question' => 'What is an example of an object relationship?',
                'a' => 'A method call between objects',
                'b' => 'A Car object interacting with an Engine object',
                'c' => 'A Driver object interacting with a Car object',
                'd' => 'Sharing attributes between objects',
                'correct' => 'c',
                'explanation' => 'An example of an object relationship is a Driver object interacting with a Car object. Object relationships describe how objects interact with each other to perform tasks.',
                'code' => null,
            ],
            [
                'category' => 'introtooop',
                'question' => 'How do you define object communication in Java?',
                'a' => 'Objects are created and destroyed dynamically',
                'b' => 'Objects interact via method calls or sharing data',
                'c' => 'Objects communicate by inheriting methods',
                'd' => 'Objects share the same constructor',
                'correct' => 'b',
                'explanation' => 'In Java, object communication occurs through method calls or sharing data between objects. Objects interact by calling methods on other objects or passing data to them.',
                'code' => null,
            ],
            [
                'category' => 'introtooop',
                'question' => 'What happens when the start method in the Car class is called?',
                'a' => 'The car’s engine starts automatically',
                'b' => 'The car\'s isStarted attribute is set to true',
                'c' => 'A new car object is created',
                'd' => 'The car\'s speed is set to 100 mph',
                'correct' => 'b',
                'explanation' => 'When the start method in the Car class is called, the car\'s isStarted attribute is set to true. The start method represents a behavior of the car object.',
                'code' => null,
            ],
            [
                'category' => 'introtooop',
                'question' => 'Why is it possible to create multiple objects of the same class in Java?',
                'a' => 'Because classes are reusable blueprints',
                'b' => 'Because constructors can return multiple objects',
                'c' => 'Because objects share the same attributes',
                'd' => 'Because objects inherit the class’s behavior',
                'correct' => 'a',
                'explanation' => 'It is possible to create multiple objects of the same class in Java because classes are reusable blueprints that define the attributes and behaviors of objects. Each object created from a class is an independent instance with its own state.',
                'code' => null,
            ]
        ]);
    }
}
