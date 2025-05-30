import { Component } from '@angular/core';
import { Router } from '@angular/router';
import Swal from 'sweetalert2';
import { Title } from '@angular/platform-browser';

@Component({
  selector: 'app-encapsulation-topics',
  templateUrl: './encapsulation-topics.component.html',
  styleUrl: './encapsulation-topics.component.scss'
})
export class EncapsulationTopicsComponent {
  currentExercise: number = 0;  // Start with exercise 1
    totalExercises: number = 10;   // Total number of exercises
    progress: number = 0;         // Initial progress value
  
    constructor(private router: Router, private title: Title) {
      this.title.setTitle('Encapsulation | Exercises');
      this.updateProgress();  
    }
  
    // Update the progress bar based on the current exercise
    updateProgress() {
      this.progress = Math.round((this.currentExercise / this.totalExercises) * 100);
    }
  
    // Method to navigate to the next exercise
    goToNextExercise() {
      if (this.currentExercise < this.totalExercises) {
        this.currentExercise++;
        this.updateProgress();
        this.router.navigate([`/exercises-topics/exercise${this.currentExercise}-encapsulation`]);
      }
    }
  
    // Handle navigation to previous exercise
    goToPreviousExercise() {
      if (this.currentExercise > 1) {
        this.currentExercise--;
        this.updateProgress();
        this.router.navigate([`/exercises-topics/exercise${this.currentExercise}--encapsulation`]);
      }
    }
  
    // Reset to the first exercise
    reset() {
      this.currentExercise = 1;
      this.updateProgress();
      this.router.navigate([`/encapsulation/exercise1-encapsulation`]);
    }
  
    // Listen for the next exercise event
    onNextExercise() {
      this.goToNextExercise();  // Move to the next exercise when event is triggered
    }
  
    closeLesson() {
      Swal.fire({
        title: 'Are you sure?',
        text: 'Do you really want to close the lesson? All your progress will be lost!',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Yes, close it!',
        cancelButtonText: 'No, keep it!'
      }).then((result) => {
        if (result.isConfirmed) {
          this.router.navigate(['/exercises/topics']);
        }
      });
    }
}
