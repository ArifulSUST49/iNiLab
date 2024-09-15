<?php
// Base class Animal with a method to make a sound
class Animal {
    // Method to be overridden by subclasses
    public function makeSound() {
        echo "This animal makes a sound.\n";
    }
}

// Dog class inheriting from Animal
class Dog extends Animal {
    // Overriding the makeSound method for a dog
    public function makeSound() {
        echo "Dog says: Woof Woof!\n";
    }
}

// Cat class inheriting from Animal
class Cat extends Animal {
    // Overriding the makeSound method for a cat
    public function makeSound() {
        echo "Cat says: Meow Meow!\n";
    }
}

// Cow class inheriting from Animal
class Cow extends Animal {
    // Overriding the makeSound method for a cow
    public function makeSound() {
        echo "Cow says: Moo Moo!\n";
    }
}

// Function to demonstrate polymorphism
function animalSound(Animal $animal) {
    $animal->makeSound();  
}

// Testing polymorphism with different animals
$dog = new Dog();
$cat = new Cat();
$cow = new Cow();

animalSound($dog);  // Output: Dog says: Woof Woof!
animalSound($cat);  // Output: Cat says: Meow Meow!
animalSound($cow);  // Output: Cow says: Moo Moo!
?>
