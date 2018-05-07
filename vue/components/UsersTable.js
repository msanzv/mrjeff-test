export default {
  template: `
    <table class="users-table">
      <thead>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Username</th>
          <th>Email</th>
          <th>Phone</th>
          <th>Website</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="user in users">
            <td>{{ user.id }}</td>
            <td>{{ user.name }}</td>
            <td>{{ user.username }}</td>
            <td>{{ user.email }}</td>
            <td>{{ user.phone }}</td>
            <td>{{ user.website }}</td>
            <td>
              <a class="js-user-delete" href="#">Delete</a>
            </td>
        </tr>
      </tbody>
    </table>
  `,

  props: {
    users: {
      type: Array,
      required: true
    }
  }
}