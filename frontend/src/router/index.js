import Vue from 'vue'
import VueRouter from 'vue-router'

import Frontpage from '../views/Frontpage.vue'

import Dashboard from '../views/Dashboard.vue'
import Todos from '../views/Todos.vue'
import NewTodo from '../views/NewTodo.vue'
import Courses from '../views/Courses.vue'
import Course from '../views/Course.vue'
import Notes from '../views/Notes.vue'
import Note from '../views/Note.vue'
import NewNote from '../views/NewNote.vue'

Vue.use(VueRouter)

const routes = [
  {
    path: '/',
    name: 'Frontpage',
    component: Frontpage
  },
  {
    path: '/dashboard',
    name: 'Dashboard',
    component: Dashboard
  },
  {
    path: '/todos',
    name: 'Todos',
    component: Todos
  },
  {
    path: '/new-todo',
    name: 'NewTodo',
    component: NewTodo
  },
  {
    path: '/courses',
    name: 'Courses',
    component: Courses
  },
  {
    path: '/course',
    name: 'Course',
    component: Course
  },
  {
    path: '/notes',
    name: 'Notes',
    component: Notes
  },
  {
    path: '/note',
    name: 'Note',
    component: Note
  },
  {
    path: '/new-note',
    name: 'NewNote',
    component: NewNote
  },


]

const router = new VueRouter({
  mode: 'history',
  base: process.env.BASE_URL,
  routes
})

export default router
