import { Injectable } from '@angular/core';
import { HttpClient, HttpHeaders } from '@angular/common/http';
import { Observable } from 'rxjs';
import { map } from 'rxjs/operators';
import { environment } from '../../environments/environment';

interface ScoreResponse {
  success: boolean;
  data: number | null;
}

@Injectable({
  providedIn: 'root'
})
export class QuizService {
  // private apiUrl = 'http://127.0.0.1:8000/api';
  private quizUrl = environment.quizUrl;
  private getQuiz = environment.baseUrl
  constructor(private http: HttpClient) {}

  private getHeaders(): HttpHeaders {
    const token = localStorage.getItem('token');

    return new HttpHeaders({
      'Content-Type': 'application/json',
      'Authorization': `Bearer ${token}`
    });
  }

  getCurrentScore(quizId: string): Observable<number | null> {
    return this.http.get<ScoreResponse>(`${this.quizUrl}/${quizId}`, {
      headers: this.getHeaders(),
    }).pipe(
      map(response => response.data)
    );
  }

  getScores(): Observable<any> {
    return this.http.get(this.quizUrl, {
      headers: this.getHeaders(),
    });
  }

  saveScore(topic: string, score: number, totalQuestions: number): Observable<any> {
    return this.http.post(this.quizUrl, {
      quiz_id: topic,
      score: score,
      total_questions: totalQuestions
    }, { headers: this.getHeaders() });
  }

  //For quiz quetsions


  getQuizzes(category: string): Observable<any> {
    return this.http.get<any>(`${this.getQuiz}/quizzes/${category}`);
  }

  // getAbstractionQuizzes(): Observable<any> {
  //   return this.http.get<any>(`${this.getQuiz}/abstraction-quizzes`);
  // }

  // getPolymorphismQuizzes(): Observable<any> {
  //   return this.http.get<any>(`${this.getQuiz}/polymorphism-quizzes`);
  // }

  // getInheritanceQuizzes(): Observable<any> {
  //   return this.http.get<any>(`${this.getQuiz}/inheritance-quizzes`);
  // }

  // getEncapsulationQuizzes(): Observable<any> {
  //   return this.http.get<any>(`${this.getQuiz}/encapsulation-quizzes`);
  // }

  // getIntroductionToJavaQuizzes(): Observable<any> {
  //   return this.http.get<any>(`${this.getQuiz}/introductionToJava-quizzes`);
  // }

  // getIntroductionToOopQuizzes(): Observable<any> {
  //   return this.http.get<any>(`${this.getQuiz}/introductionToOop-quizzes`);
  // }
}